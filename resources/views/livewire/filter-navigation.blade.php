<div id="filter">
    <ul>
        <li><a href="/">Todos</a></li>
        @foreach ($categorias as $categoria)
            <li><a href="{{ route('animales.categoria', $categoria) }}">{{ $categoria->name }}</a></li>
        @endforeach
    </ul>
</div>
