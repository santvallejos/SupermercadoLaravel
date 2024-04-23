<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="data:image/jpeg;base64,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" alt="" width="30" height="30">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
