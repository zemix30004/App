<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Имена</h1>
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
    @endforeach
</body>
</html>
