@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de razas</h1>
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
                <a href="{{ route('admin.razas.create') }}" class="btn btn-secondary">Agregar nueva raza</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($razas as $raza)
                        <tr>
                            <td>{{ $raza->id }}</td>
                            <td>{{ $raza->name }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.razas.edit', $raza) }}"
                                    class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.razas.destroy', $raza) }}" method="POST">
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
