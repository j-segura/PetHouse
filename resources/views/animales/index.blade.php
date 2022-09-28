<x-app-layout>

    <section class="banner">
        <video src="{{asset('video/video.mp4')}}" muted autoplay loop></video>
        <div class="data">
            <h1>PETHOUSE</h1>
            <p>Estas buscando un compañero</p>
            <a href="#header">Ver Candidatos</a>
        </div>
    </section>

    <div id="header">
        <h1>¡Tu Futuro Compañero Esta Aqui!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati officiis ullam repellat sequi, placeat nesciunt quas eum cum nam.</p>
    </div>

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
                    <p class="tags">{{ $animal->raza->name }}, {{ $animal->genero->name }}, {{ $animal->edad }} años</p>
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

</style>
