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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app" class="bg-danger">
        <div class="d-flex justify-content-center bg-danger">
            <img src="https://insidepulse.com/wp-content/uploads/2020/03/Asterix-Obelix-logo.png" alt="ok" style="width:20%;">
        </div>
        
        <nav id="navbar" class="navbar navbar-expand-md navbar-light bg-warning shadow-sm pb-0 pt-0">
            <div class="container">
                
                {{-- @guest
                    <a class="navbar-brand text-dark" href="{{ url('/') }}">
                        Main Page
                    </a>
                @endguest

                @auth
                    <a class="navbar-brand text-dark" href="{{ url('/comics') }}">
                        Main Page
                    </a>
                @endauth --}}
                <ul class="list-group list-group-horizontal border-0">
                    <li class="list-group-item border-0 bg-warning" style="">
                        <a class="text-dark" href="/">Home</a>
                    </li>
                    <li class="list-group-item border-0 bg-warning" style="">
                        <a class="text-dark" href="/comics">Comics</a>
                    </li>
                    <li class="list-group-item border-0 bg-warning" style="">
                        <a class="text-dark" href="">Contact</a>
                    </li>
                    <li class="list-group-item border-0 bg-warning" style="">
                        <a class="text-dark" href="">Forum</a>
                    </li>
                </ul>

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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profiles/{{ Auth::user()->profile->id }}">
                                        {{ __('Profile') }}
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

        <main class="bg-light pt-5 pb-5">
            @yield('content')
        </main>

        <div class="text-center w-100 footer bg-warning pt-5 pb-5">
            <div class="container w-50">
                <p class="mb-0"><i>The year is 50 B.C. Gaul is entirely occupied by the Romans. Well not entirely! 
                    One small village of indomitable Gauls still holds out against the invaders. And life is not easy 
                    for the Roman legionaries who garrison the fortified camps of Totorum, Aquarium, Laudanum and 
                    Compendium…</i></p>
            </div>
        </div>
    </div>
</body>
</html>
