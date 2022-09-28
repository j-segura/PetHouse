<x-app-layout>
    <div class="pading">
        <h1>{{ $raza->name }}</h1>

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
    </div>

</x-app-layout>

<style>
    .pading {
        padding: 100px 60px 40px;
    }

    .pading h1 {
        width: 100%;
        text-align: center;
        font-size: 2rem;
        font-weight: 500;
    }
</style>
