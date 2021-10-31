@include('layouts.head')
@include('layouts.navigation', ['navigation' => $navigation])

<h1>Книги</h1>

@foreach ($books as $key => $book )
<ul>
    <a href='author.php?id'={{ $book->id }}>{{ $book->name }}</a>
</ul>

@endforeach

@include('layouts.footer')
