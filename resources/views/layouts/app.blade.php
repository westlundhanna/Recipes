<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/bd7880edd1.js"></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="Nav__Container">
            <a class="Nav-Logo" href="{{ url('/') }}">
                {{ 'Recipes For You' }}
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="Nav__Items">
                    <li class="Nav__Item">
                        <a class="nav-link" href="{{ url('allRecipes') }}">{{ 'Recept' }}</a>
                    </li>
                    @guest
                        <li class="Nav__Item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Logga in') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="Nav__Item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Skapa konto') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="Nav__Item">
                            <a class="nav-link" href="{{ url('home') }}">
                                {{ 'Mina Sidor' }} 
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <main class="Wrapper">
        @yield('content')
    </main>
    <footer>
    </footer>
</body>
</html>
