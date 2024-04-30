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
                <ul class="navbarList">
                    <li><a href="{{ url('ofertas') }}">Ofertas</a></li>
                    <li><a href="">Categorias</a></li>
                    <li><a href="{{ url('sucursales') }}">Sucursales</a></li>
                    <li><a href="{{ url('comoComprar') }}">Como comprar?</a></li>
                    <li><a href="{{ url('sobreNosotros') }}">Sobre nosotros</a></li>
                </ul>
            </nav>
    
            {{-- Logo --}}
            <div>
                <a href="{{ url('/') }}" class="logoHeader"><img src="{{ asset('img/logo.jpeg') }}" alt="" ></a>
                <a href="{{ url('/') }}"><img src="{{ asset('img/2.png') }}" alt="" class="logoMovilHeader"></a>
            </div>

            {{-- Buscador --}}
            <div class="buscadorHeader">
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
            <div class="carritoCompras">
                <a href=""><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="white"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg></a>
            </div>
        </header>

        @yield('content'){{-- Contenido principal de cada vista --}}

        <footer>
            <div class="contenido">
                    <div class="filaFooter">
                        <div class="columnaIzquierda">
                            <div class="logoFooter">
                                <img src="../img/logo.jpeg" alt="logo">
                                <div class="otro">
                                    <img class="logoMovilFooter" src="../img/2.png" alt="logoMovil">
                                </div>
                            </div>
                            
                            <div class="textoColumnaIzquierda">
                                <h2>Necesitas ayuda?</h2>
                                <p>Visita <a href="">atencion al cliente</a>
                                para ayuda o llamanos al</p>
                                <p>+54 3794 487562</p>
                            </div>
                                                    
                                 <div class="redesFooter">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" /><path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" /></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M16.5 7.5l0 .01" /></svg>

                                </div>
                        </div>
                        
                        <div class="columnaMedia">
                            <div class="infoFooter">
                                <lu class="linksFooter"><a href="">Envios y devoluciones</a></lu>
                                <lu class="linksFooter"><a href="">Términos y condiciones</a></lu>
                                <lu class="linksFooter"><a href="">Metodos de pago</a></lu>
                            </div>

                            <div class="formasPagoFooter">
                                <div class="tituloFooter">
                                    <h2>Aceptamos los siguientes métodos de pago</h2>
                                </div>
                                <div class="metodosPagoFooter">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="50" height="50">
                                    <path d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm0,22c-5.514,0-10-4.486-10-10S6.486,2,12,2s10,4.486,10,10-4.486,10-10,10Zm4-8c0,1.654-1.346,3-3,3v1c0,.553-.447,1-1,1s-1-.447-1-1v-1h-.268c-1.067,0-2.063-.574-2.598-1.499-.277-.479-.113-1.09,.364-1.366,.479-.279,1.091-.113,1.366,.364,.179,.31,.511,.501,.867,.501h2.268c.552,0,1-.448,1-1,0-.378-.271-.698-.644-.76l-3.041-.507c-1.342-.223-2.315-1.373-2.315-2.733,0-1.654,1.346-3,3-3v-1c0-.552,.447-1,1-1s1,.448,1,1v1h.268c1.067,0,2.063,.575,2.598,1.5,.277,.478,.113,1.089-.364,1.366-.48,.277-1.091,.113-1.366-.365-.179-.309-.511-.5-.867-.5h-2.268c-.552,0-1,.449-1,1,0,.378,.271,.698,.644,.76l3.041,.507c1.342,.223,2.315,1.373,2.315,2.733Z" style="fill: #F2EEE4;"/>
                                    </svg>
                                    <svg id="Layer_1" height="50" viewBox="0 0 24 24" width="50" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m.291 8.552a2.443 2.443 0 0 1 .153-2.566 4.716 4.716 0 0 1 1.668-1.5l7.501-3.904a5.174 5.174 0 0 1 4.774 0l7.5 3.907a4.716 4.716 0 0 1 1.668 1.5 2.443 2.443 0 0 1 .153 2.566 2.713 2.713 0 0 1 -2.416 1.445h-18.584a2.713 2.713 0 0 1 -2.417-1.448zm22.709 13.448a2 2 0 0 0 -2-2v-8h-2v8h-3v-8h-2v8h-4v-8h-2v8h-3v-8h-2v8a2 2 0 0 0 -2 2 1 1 0 0 0 0 2h22a1 1 0 0 0 0-2z" style="fill: #F2EEE4;"/></svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="50" height="50"><path d="M19,22H5c-2.757,0-5-2.243-5-5V7C0,4.243,2.243,2,5,2h14c2.757,0,5,2.243,5,5v10c0,2.757-2.243,5-5,5ZM5,4c-1.654,0-3,1.346-3,3v10c0,1.654,1.346,3,3,3h14c1.654,0,3-1.346,3-3V7c0-1.654-1.346-3-3-3H5Zm13,9h-4c-1.103,0-2-.897-2-2v-2c0-1.103,.897-2,2-2h4c1.103,0,2,.897,2,2v2c0,1.103-.897,2-2,2Zm-4-4v2h4.001v-2h-4.001Zm-4,3c0-.552-.448-1-1-1H5c-.552,0-1,.448-1,1s.448,1,1,1h4c.552,0,1-.448,1-1Zm10,4c0-.552-.448-1-1-1H5c-.552,0-1,.448-1,1s.448,1,1,1h14c.552,0,1-.448,1-1Z" style="fill: #F2EEE4;"/></svg>
  
                                </div>
                            </div> 
                        </div>

                        <div class="columnaDerecha" >
                            <div class="tercerColumna">
                                <h2>Info</h2>
                                    <li class="info1"><a href="">Preguntas frecuentes</a></li>
                                    <li class="info1"><a href="">Sobre nosotros</a></li>
                                    <li class="info1"><a href="">Ubicaciones</a></li>
                            </div>
                        </div>
                    
                </div>  <span class="derechosAutor">
                <p>&copy; QuickMart 2024. Todos los derechos reservados.</p>
            </span>  
          </div> 
        </footer>
        {{-- Script --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

