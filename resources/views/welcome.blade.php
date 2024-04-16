<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body class="antialiased">

    <!-- Nabvar de arriba -->
        <div class="navbarArriba">

            <div class="contacto">
            <a href="#">
                <p>Acerca de</p>
            </a>
            <a href="">
                Atencion al cliente
            </a>
            </div>

            @if (Route::has('login'))
                <div class="cuenta">
                    @auth
                        <a href="{{ url('/home') }}" class="">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>

        <nav>
            <img src="" alt="" class="">
        </nav>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
