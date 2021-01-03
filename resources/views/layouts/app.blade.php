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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    @stack('style')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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
                            <li class="nav-item">
                                <a class="nav-link" style="color: white" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: white" href="/home">Daftar Kandidat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: white" href="{{ route('login') }}">Quick Count</a>
                            </li>


                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <div class="btn-group" style="margin: 1px">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Register
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li> <a class="nav-link" style="color: black" href="{{ route('register') }}">{{ __('Register') }}</a> </li>
                                            <li> <a class="nav-link" style="color: black" href="/registercan">Register Candidate</a> </li>
                                        </ul>
                                    </div>

                                </li>

{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" style="color: white" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
                            @endif

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <div class="btn-group" style="margin: 1px">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Login
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li> <a class="dropdown-item" href="{{ route('login') }}">Login as Voter</a> </li>
                                            <li> <a class="dropdown-item" href="{{ route('login') }}">Login as Admin</a> </li>
                                            <li> <a class="dropdown-item" href="{{ route('login') }}">Login as Candidate</a> </li>
                                        </ul>
                                    </div>

                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" style="color: white" href="/">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" style="color: white" href="/home">Daftar Kandidat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: white" href="/quick">Quick Count</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a style="color: white" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile">
                                       Profile
                                    </a>
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

    @stack('script')
</body>
</html>
