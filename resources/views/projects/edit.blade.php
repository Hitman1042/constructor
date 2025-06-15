<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script> 

<!-- resources/views/projects/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Редактировать проект</title>
    <!-- Подключаем SortableJS -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script> 
</head>
<body>
    <h1>Блоки проекта: {{ $project->name }}</h1>

    <!-- Контейнер с блоками -->
    <div id="block-list" class="block-list">
        <!-- Цикл по блокам проекта -->
        @foreach ($project->blocks as $block)
            <!-- Каждый блок -->
            <div 
                class="block-item" 
                data-block-id="{{ $block->id }}" 
                data-project-id="{{ $project->id }}"
            >
                {{ $block->name }} ({{ $block->type }})
            </div>
        @endforeach
    </div>

    <!-- Скрипт для SortableJS -->
    <script>
        // Инициализируем SortableJS
        new Sortable(document.getElementById('block-list'), {
            animation: 150, // Плавность анимации
            onEnd: function (evt) {
                // Получаем ID блока и новую позицию
                const blockId = evt.item.dataset.blockId;
                const newPosition = evt.newIndex;

                // Отправляем данные на сервер
                fetch('/update-position', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Защита от CSRF-атак
                    },
                    body: JSON.stringify({
                        block_id: blockId,
                        position: newPosition
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Позиция обновлена:', data);
                })
                .catch(error => {
                    console.error('Ошибка:', error);
                });
            }
        });
    </script>
</body>
</html>