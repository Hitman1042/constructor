<section class="hero py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Центральный текст -->
        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold mb-4">
                Создавайте сайт для любого бизнеса за 
                <span class="text-red-600">1 день</span>
            </h1>
            <p class="text-xl mb-8">Готовые блоки для e-commerce, услуг, образования и других ниш.</p>
            
            <!-- Кнопки -->
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="/login?tab=register" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">Начать бесплатно</a>
                <a href="#demo" class="group-relative bg-white border border-gray-300 text-gray-700 px-6 py-3 rounded hover:bg-gray-50 transition relative">
                    Заявка на демо
                    <div class="absolute inset-0 border-2 border-transparent group-relative:hover:border-blue-500 rounded pointer-events-none"></div>
                </a>
            </div>
        </div>

        <!-- Превью конструктора -->
        <div class="mb-16">
            <img src="{{ asset('images/constructor-interface.png') }}" alt="Конструктор" class="mx-auto rounded-lg shadow-md">
        </div>

        <!-- Два закругленных блока по бокам -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 container mx-auto px-4">
            <!-- Блок 1 -->
            <div class="hidden md:block bg-white p-6 rounded-full md:rounded-lg shadow-lg text-center">
                <div class="text-blue-600 text-3xl mb-2">🛠️</div>
                <h3 class="text-xl font-semibold mb-2">500+ готовых блоков</h3>
                <p class="text-gray-600">База из 500+ блоков для e-commerce, услуг, образования и других ниш.</p>
            </div>
            
            <!-- Видео -->
            <div class="bg-white p-6 rounded-full md:rounded-lg shadow-lg text-center">
                <img src="{{ asset('images/video-placeholder.jpg') }}" alt="Видео" class="mx-auto rounded-lg shadow-md">
                <button class="absolute top-4 left-4 bg-black bg-opacity-50 text-white px-3 py-1 rounded">
                    <i class="fas fa-play"></i> Смотреть видео
                </button>
            </div>
            
            <!-- Блок 2 -->
            <div class="hidden md:block bg-white p-6 rounded-full md:rounded-lg shadow-lg text-center">
                <div class="text-blue-600 text-3xl mb-2">🎨</div>
                <h3 class="text-xl font-semibold mb-2">Настройка под бренд</h3>
                <p class="text-gray-600">Изменяйте цвета, шрифты и макет под ваш брендбук.</p>
            </div>
        </div>
    </div>
</section>