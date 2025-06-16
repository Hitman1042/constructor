<!-- resources/views/partials/header.blade.php -->
<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="/" class="flex items-center">
            <img src="{{ asset('images/logo.svg') }}" alt="Constructor" class="h-8 md:h-10 w-auto">
        </a>
        <!-- Навигация -->
        <nav class="hidden md:block space-x-6 text-gray-700">
    <a href="#features" class="hover:text-blue-600">Инструменты</a>
    <a href="#blocks" class="hover:text-blue-600">Примеры блоков</a>
    <a href="#pricing" class="hover:text-blue-600">Тарифы</a>
    <a href="#integrations" class="hover:text-blue-600">Интеграции</a>
    <a href="#support" class="hover:text-blue-600">Поддержка</a>
    <a href="#contact" class="hover:text-blue-600">Контакты</a>
	</nav>

        <!-- Кнопки -->
        <div class="hidden md:flex space-x-4">
            <a href="/login" class="bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300 transition">
                Войти
            </a>
            <a href="/register" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Начать бесплатно
            </a>
        </div>

        <!-- Мобильное меню -->
        <button id="mobile-menu-button" class="md:hidden text-gray-600 focus:outline-none">
            ☰
        </button>
        <div id="mobile-menu" class="md:hidden absolute top-16 right-4 bg-white shadow-lg p-4 space-y-3 hidden">
            <a href="#features" class="block text-gray-700 hover:text-blue-600">Инструменты</a>
            <a href="#blocks" class="block text-gray-700 hover:text-blue-600">Примеры блоков</a>
            <a href="#pricing" class="block text-gray-700 hover:text-blue-600">Тарифы</a>
            <a href="#integrations" class="block text-gray-700 hover:text-blue-600">Интеграции</a>
            <a href="#support" class="block text-gray-700 hover:text-blue-600">Поддержка</a>
            <a href="#contact" class="block text-gray-700 hover:text-blue-600">Контакты</a>
            <a href="/login" class="block bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300 transition">
                Войти
            </a>
            <a href="/register" class="block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Начать бесплатно
            </a>
        </div>
    </div>

    <!-- JS для мобильного меню -->
    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    </script>
</header>