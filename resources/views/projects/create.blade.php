<!DOCTYPE html>
<html>
<head>
    <title>Создать проект</title>
</head>
<body>
    <h1>Создать проект</h1>
    <form action="/projects" method="POST">
        @csrf
        <label>Название:</label>
        <input type="text" name="name" required><br>
        <label>Описание:</label>
        <textarea name="description"></textarea><br>
        <label>Домен:</label>
        <input type="text" name="domain"><br>
        <label>Тема:</label>
        <input type="text" name="theme"><br>
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>