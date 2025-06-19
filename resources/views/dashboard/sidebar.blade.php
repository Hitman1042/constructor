<nav class="w-64 bg-gray-100 h-screen fixed left-0 top-0 overflow-y-auto">
    <div class="p-4">
        <a href="{{ route('dashboard') }}" class="flex items-center mb-6">
            <img src="{{ asset('images/logo.svg') }}" alt="Constructor" class="h-8 w-auto mr-2">
            <span class="text-xl font-bold">Constructor</span>
        </a>

        <div class="mb-6">
            <button class="flex items-center justify-between">
                <span>Мои сайты</span>
                <i class="fas fa-chevron-right"></i>
            </button>
            <button class="flex items-center justify-between mt-2">
                <span>Тарифы и оплата</span>
                <i class="fas fa-chevron-right"></i>
            </button>
            <button class="flex items-center justify-between mt-2">
                <span>Справочный центр</span>
                <i class="fas fa-chevron-right"></i>
            </button>
            <button class="flex items-center justify-between mt-2">
                <span>Профиль</span>
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <div class="mt-auto">
            <a href="{{ route('logout') }}" class="block w-full text-center py-2 hover:bg-gray-200">
                Выйти
            </a>
        </div>
    </div>
</nav>