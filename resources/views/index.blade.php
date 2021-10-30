<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Авторы</h1>
    <a href="/login">В админку</a>
    @foreach ($users as $key => $user )
    <ul>
        <b>
        <a href='author.php?id={{ $user->id}}'>
            {{ $user->firstname }} {{ $user->lastname }}
            {{-- @foreach ($books as $key => $book )
                <a href={{ $book->id}}'>
                {{ $book->book_id}}</a>
            @endforeach --}}
        </a>
        <li>Книга 1</li>
        <li>Книга 2</li>
        </b>
    </ul>
    @endforeach
</body>
</html>
