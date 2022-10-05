@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalles del animal</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="show_animal_card">
                <img src="/img/animals/{{ $candidato->foto }}" class="candidato_foto">
                <div>
                    <h1>{{ $candidato->name }}</h1>
                    <p>{{ $candidato->description }}</p>
                    <p><strong>Edad: </strong>{{ $candidato->edad }} meses</p>
                    <p><strong>Categoria: </strong>{{ $candidato->categoria->name }}</p>
                    <p><strong>Genero: </strong>{{ $candidato->genero->name }}</p>
                    <p><strong>Raza: </strong>{{ $candidato->raza->name }}</p>
                    <p><strong>Tamaño: </strong>{{ $candidato->tamaño->name }}</p>
                </div>
            </div>
        </div>
    </div>
@stop

<style>
    .show_animal_card {
        display: flex;
    }

    .show_animal_card div {
        padding: 0px 20px;
    }

    .candidato_foto {
        width: 300px;
        height: 400px;
        object-fit: cover;
    }

    @media(max-width: 800px) {
        .show_animal_card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .show_animal_card div {
            padding: 0px;
            margin-top: 20px; 
        }
    }
</style>
