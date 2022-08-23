<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    @livewireStyles
    {{-- estilos de la pagina --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navBar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adopcion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d2131ce8b5.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <footer>
            <div class="social">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>

            <ul class="contact">
                <li class="phone">
                    <i class="fa-solid fa-phone"></i>
                    311 677 1798
                </li>
                <li>pethouse@gmail.com</li>    
            </ul>

            <ul class="list">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Servicion</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Terminos y condiciones</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>

            <div class="empresa">
                PetHouse @ 2022
            </div>
        </footer>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>

<style>
    footer {
        padding: 40px 0;
        background-color: rgb(18, 18, 18);
    }

    footer .social {
        text-align: center;
        padding-bottom: 1rem;
        color: rgb(155, 155, 155);
    }

    footer .social a {
        margin: 0 4px;
        font-size: 1.3rem;
    }

    footer .social a:hover {
        color: inherit;
        opacity: 0.8;
    }

    footer .contact {
        margin-top: 0;
        padding: 0;
        margin-bottom: 15px;
        text-align: center;
        color: rgb(183, 183, 183);
        opacity: 0.8;
        font-weight: 300;
        font-size: 0.9rem;
    }

    .phone i{
        font-size: 13px;
        margin-right: 5px;
    }

    .phone {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    footer .list {
        margin-top: 0;
        padding: 0;
        list-style: none;
        font-size: 1rem;
        margin-bottom: 0;
        text-align: center;
    }

    footer .list a {
        color: rgb(183, 183, 183);
        text-decoration: none;
        opacity: 0.8;
        font-weight: 300;
        font-size: 0.9rem;
    }

    footer .list a:hover {
        opacity: 1;
    }

    footer .list li,
    footer .contact li {
        display: inline-block;
        padding: 0 15px
    }

    .empresa {
        margin-top: 15px;
        text-align: center;
        font-size: 0.8rem;
        color: rgb(88, 88, 88);
    }
</style>
