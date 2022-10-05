@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de animales</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="card-header pl-0">
                <a href="{{ route('admin.candidatos.create') }}" class="btn btn-secondary">Agregar nuevo animal</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($candidatos as $candidato)
                        <tr>
                            <td>{{ $candidato->id }}</td>
                            <td>
                                <img src="/img/animals/{{ $candidato->foto }}" class="candidato_foto">
                            </td>
                            <td>{{ $candidato->name }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.candidatos.show', $candidato) }}"
                                    class="btn btn-secondary btn-sm">Detalles</a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('admin.candidatos.edit', $candidato) }}"
                                    class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.candidatos.destroy', $candidato) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

<style>
    .candidato_foto {
        width: 150px;
        height: 200px;
        object-fit: cover;
</style>