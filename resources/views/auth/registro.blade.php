@extends('layouts.plantilla')

@section('title', 'Registro')

@section('content')
    <div class="form_box">
        <i class="fa-solid fa-paw"></i>
        <input type="text" placeholder="Nombre" class="campo">
        <input type="text" placeholder="Correo" class="campo">
        <input type="password" placeholder="Contraseña" class="campo">
        <input type="password" placeholder="Repetir contraseña" class="campo">
        <input type="submit" value="Registrarme" class="btn_enviar">
        <p>
            <a href="{{route('entrar')}}">¿Ya tienes una cuenta?</a>
        </p>
    </div>

    <img src="{{ asset('img/gato_registro.png') }}" alt="" class="img_registro">
@endsection
