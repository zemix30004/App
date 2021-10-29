<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Создать имя</h1>
    <a href="/admin/users">Создать</a><br>

    <form action="{{route('users.store')  }}" method="post">
        @csrf
        <label for="firstname">Имя</label>
        <input type="text" name="firstname" ><br>

        <label for="lastname">Фамилия</label>
        <input type="text" name="lastname"><br>

        <label for="login">Логин</label>
        <input type="text" name="login"><br>

        <label for="email">Email</label>
        <input type="text" name="email"><br>

        <label for="password">Пароль</label>
        <input type="text" name="password"><br>

        <input type="submit" value="Создать"><br>
    </form>
    {{-- <h1>Имена</h1>
    <a href="/admin">Назад</a>
    <a href="/admin/users/create">Создать</a>

    @foreach ($users as $key => $user )
        <a href='/admin/users/{{ $user->id}}/edit'>
        {{ $user->firstname }} {{ $user->lastname }}</a>

        <form action="/admin/users/{{ $user->id}}/delete" method="post">
            @csrf
            <input type="submit" value="Удалить">
        </form>
        <br>
    @endforeach --}}
</body>
</html>
