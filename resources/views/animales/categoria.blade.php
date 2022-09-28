<x-app-layout>
    <section class="banner">
        <img src="/img/categoria_banners/{{ $categoria->banner }}">
        <div class="data">
            <h1>{{ $categoria->name }}</h1>
            <p>Estas buscando un compañero</p>
            <a href="#header">Ver Candidatos</a>
        </div>
    </section>

    @livewire('filter-navigation')

    <section id="adoptar">
        <div class="animals">

            @foreach ($animals as $animal)
                <!-- card -->
                <a href="{{ route('animales.show', $animal) }}" class="card">
                    <div class="img">
                        <img src="/img/animals/{{ $animal->foto }}" alt="">
                    </div>
                    <div class="card_contenido">
                        <h2 class="name">{{ $animal->name }}</h2>
                        <p class="tags">{{ $animal->raza->name }}, {{ $animal->genero->name }},
                            {{ $animal->edad }} años</p>
                    </div>
                </a>
            @endforeach

        </div>

        <div class="p-20">
            {{ $animals->links() }}
        </div>
    </section>

</x-app-layout>

<style>
    .categoria {
        padding: 100px 60px 40px;
    }
</style>
