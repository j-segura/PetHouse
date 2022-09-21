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

    <div id="filter">
        <ul>
            <li><a href="">Todos</a></li>
            <li><a href="">Perros</a></li>
            <li><a href="">Gatos</a></li>
        </ul>
    </div>

    <section id="adoptar">
        <div class="animals">

            <!-- card_1 -->
            <div class="card">
                <div class="img">
                    <img src="{{ asset('img/animals/animal6.jpg') }}" alt="">
                </div>
                <div class="card_contenido">
                    <h2 class="name">Stella</h2>
                    <p class="tags">Pit Bull, Hembra, 3 años</p>
                </div>
            </div>

            <div class="card">
                <div class="img">
                    <img src="{{ asset('img/animals/animal10.jpg') }}" alt="">
                </div>
                <div class="card_contenido">
                    <h2 class="name">Flor</h2>
                    <p class="tags">Pit Bull, Hembra, 3 años</p>
                </div>
            </div>

            <!-- card_2 -->
            <div class="card">
                <div class="img">
                    <img src="{{ asset('img/animals/animal7.jpg') }}" alt="">
                </div>
                <div class="card_contenido">
                    <h2 class="name">Duke</h2>
                    <p class="tags">Pit Bull, Hembra, 3 años</p>
                </div>
            </div>

            <!-- card_2 -->
            <div class="card">
                <div class="img">
                    <img src="{{ asset('img/animals/animal3.jpg') }}" alt="">
                </div>
                <div class="card_contenido">
                    <h2 class="name">Winter</h2>
                    <p class="tags">Pit Bull, Hembra, 3 años</p>
                </div>
            </div>

            <!-- card_2 -->
            <div class="card">
                <div class="img">
                    <img src="{{ asset('img/animals/animal9.jpg') }}" alt="">
                </div>
                <div class="card_contenido">
                    <h2 class="name">Pixie</h2>
                    <p class="tags">Pit Bull, Hembra, 3 años</p>
                </div>
            </div>

            <div class="card">
                <div class="img">
                    <img src="{{ asset('img/animals/animal11.jpg') }}" alt="">
                </div>
                <div class="card_contenido">
                    <h2 class="name">April</h2>
                    <p class="tags">Pit Bull, Hembra, 3 años</p>
                </div>
            </div>

            <!-- card_2 -->
            <div class="card">
                <div class="img">
                    <img src="{{ asset('img/animals/animal5.jpg') }}" alt="">
                </div>
                <div class="card_contenido">
                    <h2 class="name">Dash</h2>
                    <p class="tags">Pit Bull, Hembra, 3 años</p>
                </div>
            </div>

            <div class="card">
                <div class="img">
                    <img src="{{ asset('img/animals/animal7.jpg') }}" alt="">
                </div>
                <div class="card_contenido">
                    <h2 class="name">Dash</h2>
                    <p class="tags">Pit Bull, Hembra, 3 años</p>
                </div>
            </div>

            <div class="card">
                <div class="img">
                    <img src="{{ asset('img/animals/animal8.jpg') }}" alt="">
                </div>
                <div class="card_contenido">
                    <h2 class="name">Emma</h2>
                    <p class="tags">Pit Bull, Hembra, 3 años</p>
                </div>
            </div>

        </div>
    </section>
</x-app-layout>

<style>

</style>
