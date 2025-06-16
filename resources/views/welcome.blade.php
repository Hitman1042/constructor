<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Constructor - Сайт-конструктор для бизнеса</title>
    
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"  rel="stylesheet">
    
    <!-- AOS (через cdnjs, т.к. unpkg.com блокируется) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"  rel="stylesheet">
    
    <!-- Стили для Hero -->
    <style>
        .hero {
            background: linear-gradient(to right, #f0f4f8, #e2ebf0);
        }

        /* Адаптивность для мобильных устройств */
        @media (max-width: 768px) {
            .hero .grid-cols-3 {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body class="font-sans">

    <!-- Верхнее меню -->
    @include('partials.header')

    <!-- Hero-секция -->
    @include('partials.hero')

    <!-- Преимущества -->
    @include('partials.features')

    <!-- Галерея блоков -->
    @include('partials.blocks-gallery')

    <!-- Сравнение стоимости -->
    @include('partials.pricing')

    <!-- Интеграции -->
    @include('partials.integrations')

    <!-- Поддержка -->
    @include('partials.support')

    <!-- Контакты -->
    @include('partials.contact')

    <!-- Футер -->
    @include('partials.footer')

    <!-- AOS (через cdnjs) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> 
    <script>
        AOS.init();
    </script>

    <!-- Якорный скролл -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const target = document.querySelector(targetId);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>

    <!-- Анимация кнопки "Заявка на демо" -->
    <style>
        .group-relative {
            position: relative;
            overflow: hidden;
        }
        .group-relative .absolute-border {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 2px solid transparent;
            transition: border-color 0.3s ease;
        }
        .group-relative:hover .absolute-border {
            border-color: #3B82F6;
        }
    </style>
</body>
</html>