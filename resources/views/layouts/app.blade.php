<!DOCTYPE html>
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
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="Nav__Container">
            <a class="Nav-Logo" href="{{ url('/') }}">
                {{ 'Recipes For You' }}
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="Nav__Items">
                    <li class="Nav__Item">
                        <a class="nav-link" href="{{ url('allRecipes') }}">{{ 'Recept' }}</a>
                    </li>
                    <!-- Authentication Links -->
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ 'Mina Sidor' }} <span class="caret"></span>
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
