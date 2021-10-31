{{-- <!DOCTYPE html>
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
        </a>
@foreach ($user->books as $book )
<li>{{ $book->name }}</li>
@endforeach
        </ul>
    </b>
    @endforeach
</body>
</html> --}}
@include('layouts.head')
@include('layouts.navigation', ['navigation' => $navigation])

<h1>Авторы</h1>
<a href="/login">В админку</a>
@foreach ($users as $key => $user )
<ul>
    <b>
    <a href='author.php?id={{ $user->id}}'>
        {{ $user->firstname }} {{ $user->lastname }}</a>
@foreach ($user->books as $book )
<li>{{ $book->name }}</li>
@endforeach
    </b>
</ul>
@endforeach

@include('layouts.footer')

