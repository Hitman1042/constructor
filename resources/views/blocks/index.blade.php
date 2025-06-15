<!DOCTYPE html>
<html>
<head>
    <title>Блоки</title>
</head>
<body>
    <h1>Список блоков</h1>
    <a href="{{ route('blocks.create') }}">Создать блок</a>
    <ul>
        @foreach($blocks as $block)
            <li>
                {{ $block->name }} ({{ $block->type }})
                <a href="{{ route('blocks.edit', $block) }}">Редактировать</a>
            </li>
        @endforeach
    </ul>
</body>
</html>