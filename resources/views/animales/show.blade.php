<x-app-layout>
    <div class="animal_show">
        <div class="img_show">
            <img src="/img/animals/{{ $animal->foto }}">
        </div>
        
        <div class="show_info">
            <h1>{{ $animal->name }}</h1>
            
            <p>{{ $animal->description }}</p>

            <div class="tags">
                <p>Raza: <a href="{{ route('animales.raza', $animal->raza) }}" >{{ $animal->raza->name }}</a></p>
                <p>Genero: <a href="{{ route('animales.genero', $animal->genero) }}" >{{ $animal->genero->name }}</a></p>
                <p>Tamaño: <a href="{{ route('animales.tamaño', $animal->tamaño) }}" >{{ $animal->tamaño->name }}</a></p>
            </div>
        </div>
    </div>

    <hr>

    <div class="similares_show">
        <h1>Algunos candidatos similares</h1>
        <div class="similares_show_list">
            @foreach ($similares as $similar)
                <a href="{{ route('animales.show', $similar) }}" class="similares_box">
                    <div class="img_similares">
                        <img src="/img/animals/{{ $similar->foto }}">
                    </div>
                    <span>{{ $similar->name }}</span>
                </a>
            @endforeach
        </div>
    </div>
</x-app-layout>



<style>
    .animal_show {
        padding: 130px 60px 40px;
        height: auto;
        display: grid;
        grid-template-columns: 1fr 2fr; 
    }

    .similares_show {
        padding: 20px 60px;
    }

    .similares_show h1 {
        font-weight: 500;
        font-size: 1.2rem;
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
    }

    .similares_show_list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .similares_box {
        margin: 20px;
    }

    .similares_box .img_similares {
        width: 150px;
        height: 200px;
    }

    .similares_box .img_similares img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .img_show {
        height: 500px;
        border-radius: 5px;
        overflow: hidden;     
    }

    .img_show img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .show_info {
        padding: 0 2rem;
    }

    .show_info h1 {
        font-size: 2.3rem;
        text-transform: capitalize;
        font-weight: 500;
        color: #5010aa;
        margin-bottom: 10px;
    }

    .show_info p {
        color: rgb(68, 68, 68);
        margin-top: 5px;
    }

    .show_info .tags {
        margin: 20px 0 10px;
    }

    .show_info .tags p {
        font-weight: 500;
    }

    .show_info .tags p a {
        color: white;
        background-color: #3e3e3e;
        padding: 1px 15px;
        border-radius: 50px;
        font-size: 0.8rem;
    }
</style>