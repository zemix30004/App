<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Привет {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h1>
    <a href="/admin/users">Пользователи</a><br>
    <a href="/admin/books">Книги</a><br>
<form action="/logout" method="post">
    @csrf
<input type="submit" value="Выйти">
</form>
</body>
</html>
