<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="App">
            <header class="Header">
                <div class="Logo">
                    <a href="{{ route('home') }}" class="Logo-link">Soundcloud</a>
                </div>

                <form method="GET" action="/search" class="Searchbar">
                    <input class="Searchbar-input" name="q" type="text" placeholder="Buscar..." />
                </form>

                <nav class="Navigation">
                    <ul class="Navigation-list">
                        @auth
                            <li class="Navigation-listItem">
                                <a href="{{ route('songs.create') }}" class="Navigation-listLink btn btn-flat">Upload a song</a>
                            </li>

                            <li class="Navigation-listItem">
                                <a href="{{ route('playlists.create') }}" class="Navigation-listLink btn btn-flat">Create a playlist</a>
                            </li>
                        @endauth

                        @guest
                            <li class="Navigation-listItem">
                                <a href="{{ route('login') }}" class="Navigation-listLink btn btn-flat">Inicia sesion</a>
                            </li>
                            <li class="Navigation-listItem">
                                <a href="{{ route('register') }}" class="Navigation-listLink btn btn-primary">Crea tu cuenta</a>
                            </li>
                        @endguest
                    </ul>
                </nav>
            </header>

            @yield('content')

            <footer class="Footer">
                <span class="text">Idioma: Espańol</span>
            </footer>
        </main>
    </div>
</body>
</html>
