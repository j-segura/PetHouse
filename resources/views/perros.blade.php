<x-app-layout>
    <div class="header_candidatos">
        <div class="imagen_candidato">
            <img src="{{ asset('img/dog_header.jpg') }}" alt="">
        </div>
        <div class="descripcion_header_candidatos">
            <h1>Adopta tu perro</h1>
            <p>
                No hay compañero tan fiel como un perro, ni amigo más leal. Ningún amor se le puede comparar, ni el del
                humano más enamorado por otra persona
            </p>
            <a href="#nuestros_candidatos">Ver candidatos</a>
        </div>
    </div>
    <div id="nuestros_candidatos">
        <div class="title">
            <h2>Nuestros candidatos</h2>
            <p>Ellos estan esperando por ti, no lo hagas esperar mas</p>
        </div>
        <div id="candidatos">

            <div class="card_candidato">
                <img src="{{asset('img/pets/perro1.jpg')}}" alt="">
                <div class="info_pet">
                    <h2>Gus</h2>
                    <h3>Pug</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <a href="">conocer</a>
                </div>
            </div>

            <div class="card_candidato">
                <img src="{{asset('img/pets/perro2.jpg')}}" alt="">
                <div class="info_pet">
                    <h2>Thor</h2>
                    <h3>Pug</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <a href="">conocer</a>
                </div>
            </div>

            <div class="card_candidato">
                <img src="{{asset('img/pets/perro3.png')}}" alt="">
                <div class="info_pet">
                    <h2>Max</h2>
                    <h3>Pug</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <a href="">conocer</a>
                </div>
            </div>

            <div class="card_candidato">
                <img src="{{asset('img/pets/perro3.png')}}" alt="">
                <div class="info_pet">
                    <h2>Max</h2>
                    <h3>Pug</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <a href="">conocer</a>
                </div>
            </div>
            
            <div class="card_candidato">
                <img src="{{asset('img/pets/perro1.jpg')}}" alt="">
                <div class="info_pet">
                    <h2>Gus</h2>
                    <h3>Pug</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <a href="">conocer</a>
                </div>
            </div>

            <div class="card_candidato">
                <img src="{{asset('img/pets/perro2.jpg')}}" alt="">
                <div class="info_pet">
                    <h2>Coco</h2>
                    <h3>Pug</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <a href="">conocer</a>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');


    .header_candidatos {
        display: grid;
        grid-template-columns: 4fr 6fr;
        background-color: #1F1926;
        height: 85vh;
    }

    .imagen_candidato {
        background-image: antiquewhite;
        overflow: hidden;
    }

    .imagen_candidato img {
        width: 100%;
        height: 600px;
    }

    .descripcion_header_candidatos {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .descripcion_header_candidatos h1 {
        font-family: 'Poppins';
        font-size: 60px;
        color: #8851FF;
        margin-bottom: 20px;

    }

    .descripcion_header_candidatos p {
        font-family: 'Roboto';
        font-size: 28px;
        color: #FFFEFE;
        font-weight: 200;
        text-align: center;
        max-width: 600px;
        line-height: 32px;
    }

    .descripcion_header_candidatos a {
        font-family: 'Poppins';
        font-size: 20px;
        color: #8851FF;
        padding: 10px 30px;
        border: 2px solid #8851FF;
        border-radius: 10px;
        margin-top: 30px;
    }

    /* NUESTROS CANDIDATOS */

    #nuestros_candidatos {
        padding: 50px;
    }

    #nuestros_candidatos .title {
        margin-bottom: 30px;
    }

    #nuestros_candidatos .title h2 {
        font-family: 'Poppins';
        font-size: 45px;
        color: #372B47;
        text-align: center;
    }

    #nuestros_candidatos .title p {
        font-family: 'Poppins';
        font-size: 25px;
        color: #000;
        text-align: center;
    }

    #candidatos {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 30px;
    }

    .card_candidato {
        background-color: #1F1926;
        border-radius: 15px;
        display: flex;
        overflow: hidden;
        box-shadow: 18px 13px 44px -15px rgba(0,0,0,0.78);
    }

    .card_candidato img{
        width: 50%;
    }

    .info_pet {
        padding: 20px;
    }

    .info_pet h2 {
        color: #FFFFFF;
        font-size: 30px;
    }

    .info_pet h3 {
        color: #C4FCF0;
        font-size: 18px;
    }

    .info_pet p {
        color: #a0a0a0;
        font-size: 15px;
        margin-bottom: 10px; 
    }

    .info_pet a {
        color: #ffffff;
        font-size: 15px;
        padding: 5px 15px;
        background: #64BAAA;
        border-radius: 10px;

    }
</style>
