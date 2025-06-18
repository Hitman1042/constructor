<header class="bg-gradient-to-r from-blue-50 to-indigo-100 bg-opacity-50 sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center relative">
        <!-- Логотип -->
        <a href="/" class="flex items-center z-10">
            <img src="{{ asset('images/logo.svg') }}" alt="Constructor" class="h-8 md:h-10 w-auto">
        </a>

        <!-- Центральная часть (меню) -->
         <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 bg-white rounded-full px-6 py-2 items-center space-x-6 shadow-sm">
                <a href="#features" class="hover:text-blue-600 transition">Инструменты</a>
                <a href="#blocks" class="hover:text-blue-600 transition">Примеры блоков</a>
                <a href="#pricing" class="hover:text-blue-600 transition">Тарифы</a>
                <a href="#integrations" class="hover:text-blue-600 transition">Интеграции</a>
                <a href="#support" class="hover:text-blue-600 transition">Поддержка</a>
                <a href="#contact" class="hover:text-blue-600 transition">Контакты</a>
            </nav> 
</div>

        <!-- Кнопки справа -->
        <div class="flex items-center space-x-4">
            <a href="/login" class="text-gray-700 hover:text-gray-900 transition">Войти</a>
            <a href="/login?tab=register" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">
    		Начать бесплатно
		</a>
        </div>

        <!-- Бургер-меню (только на мобильных) -->
        <button id="mobile-menu-button" class="md:hidden text-gray-700 focus:outline-none z-10">
            ☰
        </button>
    </div>

    <!-- Мобильное меню (скрыто по умолчанию) -->
    <div id="mobile-menu" class="md:hidden absolute top-16 right-0 bg-white p-4 space-y-3 rounded-lg shadow-md hidden w-48 z-50">
        <a href="#features" class="block text-gray-700 hover:text-blue-600">Инструменты</a>
        <a href="#blocks" class="block text-gray-700 hover:text-blue-600">Примеры блоков</a>
        <a href="#pricing" class="block text-gray-700 hover:text-blue-600">Тарифы</a>
        <a href="#integrations" class="block text-gray-700 hover:text-blue-600">Интеграции</a>
        <a href="#support" class="block text-gray-700 hover:text-blue-600">Поддержка</a>
        <a href="#contact" class="block text-gray-700 hover:text-blue-600">Контакты</a>
        <hr class="border-t border-gray-200 my-3">
        <a href="/login" class="block bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-50 transition">
            Войти
        </a>
        <a href="{{ route('register') }}" class="block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            Начать бесплатно
        </a>
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

        // Закрытие меню при клике вне его области
        document.addEventListener('click', function (e) {
            if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</header>