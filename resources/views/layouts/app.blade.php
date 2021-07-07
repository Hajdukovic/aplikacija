<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Aplikacija za praćenje stanja pacijenata') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Aplikacija za praćenje stanja pacijenata') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Prijava') }}</a>
                        </li>
                        @endif
                        @if (Auth::check())

                        @endif

                        @else
                        <li style="width:150px">
                            <a> Pozdrav, {{ Auth::user()->name }}</a>
                        </li>
                        <li style="width:100px">
                            <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Početna</a>
                        </li>
                        @if (Auth::user()->role == 0)
                        <li style="width:150px">
                            <a href="{{ route('patient.create') }}" class="text-sm text-gray-700 underline">Dodaj pacijenta</a>
                        </li>
                        @endif
                        @if (Auth::user()->role == 2)
                        <li style="width:150px">
                            <a href="{{ route('doctor.create') }}" class="text-sm text-gray-700 underline">Dodaj liječnika</a>
                        </li>
                        @endif

                        @if (Auth::user()->role == 2)
                        @if (Route::has('register'))
                        <li style="width:150px">
                            <a href="{{ route('register') }}" class="text-sm text-gray-700 underline">{{ __('Registracija korisnika') }}</a>
                        </li>
                        @endif
                        @endif

                        <div>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Odjava') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
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