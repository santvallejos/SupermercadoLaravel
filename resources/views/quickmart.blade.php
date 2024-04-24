<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                            {{-- El titulo respectivo de cada vista --}}
        <title>QuickMart | @yield('title')</title>

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        {{-- Styles css --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body>

        {{--  Para no estar repitiendo el código en cada vista  --}}
        <header>
            {{-- Boton para abrir menú --}}
            <button class="abrirMenu" id="abrirMenu">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="white"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
            </button>
            {{-- Menú --}}
            <nav class="navbar" id="navbar">
                {{-- Boton para cerrar menú --}}
                <button class="cerrarMenu" id="cerrarMenu">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="white"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                </button>
                {{-- Lista del menú --}}
                <ul class="navList">
                    <li><a href="{{ url('ofertas') }}">Ofertas</a></li>
                    <li><a href="">Categorias</a></li>
                    <li><a href="{{ url('sucursales') }}">Sucursales</a></li>
                    <li><a href="{{ url('comoComprar') }}">Como comprar?</a></li>
                    <li><a href="{{ url('sobreNosotros') }}">Sobre nosotros</a></li>
                </ul>
            </nav>
    
            {{-- Logo --}}
            <div>
                <a href="{{ url('/') }}" class="logo"><img src="{{ asset('img/logo.jpeg') }}" alt="" ></a>
                <a href="{{ url('/') }}"><img src="{{ asset('img/2.png') }}" alt="" class="logoMovil"></a>
            </div>

            {{-- Buscador --}}
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Buscar...">
                <button type="submit" class="searchButton">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="20" height="20"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </button>
            </div>
    

            {{-- Cuenta --}}
            @if (Route::has('login'))
                <div class="cuenta">
                    @auth
                        <a href="{{ url('/home') }}" class="">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="">Log in</a>
    
                        <p>|</p>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            {{-- Carrito de compras --}}
            <div class="shopCar">
                <a href=""><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="white"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg></a>
            </div>
        </header>

        @yield('content'){{-- Contenido principal de cada vista --}}

        {{-- Script --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>