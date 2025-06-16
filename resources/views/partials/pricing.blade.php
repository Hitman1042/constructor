<!-- resources/views/partials/pricing.blade.php -->
<section id="pricing" class="bg-white py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-12">Тарифы</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Тариф Free -->
            <div class="bg-white p-6 rounded shadow text-center">
                <h3 class="text-xl font-semibold mb-2">Free</h3>
                <p class="text-2xl font-bold mb-4">$0/мес</p>
                <ul class="text-gray-600 mb-6">
                    <li>✔️ 1 проект</li>
                    <li>✔️ Базовые блоки</li>
                    <li>✔️ Экспорт HTML</li>
                </ul>
                <a href="/register" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Начать бесплатно
                </a>
            </div>

            <!-- Тариф Pro -->
            <div class="bg-blue-100 p-6 rounded shadow text-center">
                <h3 class="text-xl font-semibold mb-2">Pro</h3>
                <p class="text-2xl font-bold mb-4">$9.99/мес</p>
                <ul class="text-gray-600 mb-6">
                    <li>✔️ Неограниченные проекты</li>
                    <li>✔️ Расширенные блоки</li>
                    <li>✔️ Экспорт без логотипа</li>
                </ul>
                <a href="/pricing" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Выбрать Pro
                </a>
            </div>

            <!-- Тариф Enterprise -->
            <div class="bg-white p-6 rounded shadow text-center">
                <h3 class="text-xl font-semibold mb-2">Enterprise</h3>
                <p class="text-2xl font-bold mb-4">По запросу</p>
                <ul class="text-gray-600 mb-6">
                    <li>✔️ Кастомные шаблоны</li>
                    <li>✔️ API</li>
                    <li>✔️ Приоритетная поддержка</li>
                </ul>
                <a href="/contact" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Связаться с нами
                </a>
            </div>
        </div>
    </div>
</section>