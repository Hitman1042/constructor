<!DOCTYPE html>
<html>
<head>
    <title>Создать блок</title>
</head>
<body>
    <h1>Создать блок</h1>
    <form action="{{ route('blocks.store') }}" method="POST">
        @csrf
        <label>Тип:</label>
        <input type="text" name="type" required><br>

        <label>Название:</label>
        <input type="text" name="name" required><br>

        <label>Содержимое (JSON):</label>
        <textarea name="default_content" required>{"text": "Пример текста"}</textarea><br>

        <label>Стили (JSON):</label>
        <textarea name="default_styles">{"color": "#000000", "font_size": "16px"}</textarea><br>

        <label>Категория:</label>
        <input type="text" name="category" value="general" required><br>

        <button type="submit">Сохранить</button>
    </form>
</body>
</html>