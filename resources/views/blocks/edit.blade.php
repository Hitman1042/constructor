<!DOCTYPE html>
<html>
<head>
    <title>Редактировать блок</title>
</head>
<body>
    <h1>Редактировать блок: {{ $block->name }}</h1>
    <form action="{{ route('blocks.update', $block) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Тип:</label>
        <input type="text" name="type" value="{{ $block->type }}" required><br>

        <label>Название:</label>
        <input type="text" name="name" value="{{ $block->name }}" required><br>

        <label>Содержимое (JSON):</label>
        <textarea name="default_content">{{ $block->default_content }}</textarea><br>

        <label>Стили (JSON):</label>
        <textarea name="default_styles">{{ $block->default_styles }}</textarea><br>

        <label>Категория:</label>
        <input type="text" name="category" value="{{ $block->category }}" required><br>

        <button type="submit">Обновить</button>
    </form>
</body>
</html>