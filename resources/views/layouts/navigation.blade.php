<ul class="nav">
    @foreach ($navigation as $item )
    <li><a href="{{ $item->link }}">{{ $item->name }}</a></li>
    @endforeach
</ul>
