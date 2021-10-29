<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Обновить имя {{ $user->firstname }} {{ $user->lastname }}</h1>
    <a href="/admin/users">Назад</a><br>

    <form action="{{ route('users.update', $user) }}" method="post">
        @csrf
        @method('PUT')
        <label for="firstname">Имя</label>
        <input type="text" name="firstname" value="{{ $user->firstname }}"><br>

        <label for="lastname">Фамилия</label>
        <input type="text" name="lastname" value="{{ $user->lastname }}"><br>

        <input type="submit" value="Обновить"><br>
    </form>

</body>
</html>
