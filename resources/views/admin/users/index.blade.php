<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Имена</title>
</head>
<body>
    <h1>Имена</h1>
    <a href="/admin">Назад</a><br>
    <a href="/admin/users/create">Создать</a><br>

    @foreach ($users as $key => $user)
    <a href="{{ route('users.edit', $user) }}">{{ $user->firstname}} {{ $user->lastname }}</a>
    <form action="{{ route('users.destroy', $user) }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="Удалить">
    </form>
    <br>
    @endforeach
</body>
</html>
