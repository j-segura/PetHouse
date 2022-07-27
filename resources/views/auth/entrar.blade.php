@extends('layouts.plantilla')

@section('title', 'Entrar')

@section('content')
    
    <div class="form_box">
        <i class="fa-solid fa-paw"></i>
        <input type="text" placeholder="Correo" class="campo correo">
        <input type="password" placeholder="Contraseña" class="campo">
        <input type="submit" value="iniciar seccion" class="btn_enviar">
        <p>
            <a href="{{route('registro')}}">Registrarme</a> | <a href="">¿Olvidaste tu contraseña?</a>
        </p>
    </div>

    <img src="{{asset('img/perrito_login.png')}}" alt="" class="img_login">
@endsection
