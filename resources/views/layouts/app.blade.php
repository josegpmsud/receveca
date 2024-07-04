<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="Logo Recebeca">
            </div>
        </div>
    </div>

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
                        @can('asesor')

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('vehiculos.index')}}">Vehiculos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contratos.index')}}">Contratos</a>
                        </li>

                        @endcan

                        @can('admin')

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('users.index')}}">Usuarios</a>
                        </li>
                        {{--
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('usuarios.index')}}">usuarios</a>
                        </li>
                        --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('plans.index')}}">Planes</a>
                                </li>
                        <li class="nav-item">
                                <a class="nav-link" href="{{route('marcas.index')}}">Marcas</a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{route('rols.index')}}">roles</a>
                        </li> --}}

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('tipos.index')}}">Tipos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('usos.index')}}">Usos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('colors.index')}}">Colores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('clases.index')}}">Clases</a>
                        </li>
                        @endcan



                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} || {{ Auth::user()->id_rol }}
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
