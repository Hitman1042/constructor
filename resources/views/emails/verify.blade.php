<!DOCTYPE html>
<html>
<head>
    <title>Подтвердите ваш Email</title>
</head>
<body>
    <h1>Добро пожаловать в Constructor, {{ $user->name }}!</h1>
    <p>Для завершения регистрации, подтвердите ваш email:</p>
    <a href="{{ url('/verify-email/' . $user->id . '/' . $user->remember_token) }}">Подтвердить Email</a>
</body>
</html>