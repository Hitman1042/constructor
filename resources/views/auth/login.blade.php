<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход | Constructor</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"  rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"  rel="stylesheet">
    <style>
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        .tab-button.active {
            border-bottom: 2px solid #3B82F6;
            color: #3B82F6;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-blue-50 to-indigo-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md mx-auto bg-white rounded-lg shadow-lg p-8">
        <!-- Табы -->
        <div class="flex justify-around mb-8">
            <button id="login-tab" class="tab-button active text-lg font-medium pb-2">Войти</button>
            <button id="register-tab" class="tab-button text-lg font-medium pb-2">Зарегистрироваться</button>
        </div>

        <!-- Форма входа -->
        <form id="login-form" class="tab-content active" method="POST" action="/login">
            @csrf
            <h2 class="text-2xl font-bold mb-6 text-center">Вход в личный кабинет</h2>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="email">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="password">Пароль</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
                Войти
            </button>
        </form>

        <!-- Форма регистрации -->
        <form id="register-form" class="tab-content" method="POST" action="{{ route('register.store') }}">
    @csrf
    <h2 class="text-2xl font-bold mb-6 text-center">Создать аккаунт</h2>

    <!-- Имя -->
    <div class="mb-4">
        <label class="block text-gray-700 mb-2" for="name">Имя</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required class="w-full px-4 py-2 border rounded-md">
        @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Email -->
    <div class="mb-4">
        <label class="block text-gray-700 mb-2" for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required class="w-full px-4 py-2 border rounded-md">
        @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Пароль -->
    <div class="mb-4">
        <label class="block text-gray-700 mb-2" for="password">Пароль</label>
        <input type="password" name="password" id="password" required class="w-full px-4 py-2 border rounded-md">
        @error('password')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Подтверждение пароля -->
    <div class="mb-6">
        <label class="block text-gray-700 mb-2" for="password_confirmation">Подтвердите пароль</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full px-4 py-2 border rounded-md">
    </div>

    <!-- Цель использования -->
    <div class="mb-6">
        <label class="block text-gray-700 mb-2">Цель использования</label>
        <select name="purpose" class="w-full px-4 py-2 border rounded-md">
            <option value="">Выберите цель</option>
            <option value="ecommerce">E-commerce</option>
            <option value="services">Услуги</option>
            <option value="education">Образование</option>
            <option value="other">Другое</option>
        </select>
    </div>
	<!-- Сообщение из сессии -->
	@if (session('status'))
    <div class="bg-green-100 text-green-800 p-3 mb-4 rounded mx-auto max-w-md">
        {{ session('status') }}
    </div>
	@endif

	@if (session('error'))
    <div class="bg-red-100 text-red-800 p-3 mb-4 rounded mx-auto max-w-md">
        {{ session('error') }}
    </div>
	@endif
	<button type="submit" class="w-full mb-2 bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
        Зарегистрироваться
    </button> 

    <!-- Форма для повторной отправки письма -->
	<form id="resend-form" class="mt-4 hidden" method="POST" action="{{ route('resend.verification') }}">
   	 @csrf
    	<input type="hidden" name="email" value="{{ old('email') }}">
        <!-- Кнопка регистрации -->
    	<button type="submit" class="text-blue-600 hover:text-blue-800">
        	Отправить письмо повторно
    	</button>  
    
    </form>
    
    
</form>
    </div>
</body>

<!-- JS для переключения табов -->
<script>
    const loginTab = document.getElementById('login-tab');
    const registerTab = document.getElementById('register-tab');
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');

    loginTab.addEventListener('click', () => {
        loginTab.classList.add('active');
        registerTab.classList.remove('active');
        loginForm.classList.add('active');
        registerForm.classList.remove('active');
    });

    registerTab.addEventListener('click', () => {
        loginTab.classList.remove('active');
        registerTab.classList.add('active');
        loginForm.classList.remove('active');
        registerForm.classList.add('active');
    });
// Функция переключения табов
    function switchTab(tab) {
        loginTab.classList.remove('active');
        registerTab.classList.remove('active');
        loginForm.classList.remove('active');
        registerForm.classList.remove('active');

        if (tab === 'register') {
            registerTab.classList.add('active');
            registerForm.classList.add('active');
        } else {
            loginTab.classList.add('active');
            loginForm.classList.add('active');
        }
    }

    // Обработчики кликов на табы
    loginTab.addEventListener('click', () => switchTab('login'));
    registerTab.addEventListener('click', () => switchTab('register'));

    // Проверка URL при загрузке страницы
    window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        const tab = urlParams.get('tab');
        if (tab === 'register') {
            switchTab('register');
        } else {
            switchTab('login');
        }
    };
</script>
</script>
</html>