@extends('layouts.app')

@section('content')
    <section class="Home">
        <section class="Banner">
            <section class="Banner-content">
                <h1 class="Banner-title">Conectar en Larasongs</h1>
                <p class="Banner-text">
                    Descubre escucha y comparte un catalogo que no deja de crecer con artistas emergentes y consolidados de todo el mundo.
                </p>

                <a href="{{ route('register') }}" class="Banner-button btn btn-primary">
                    Registrate gratis
                </a>
            </section>


        </section>

        <section class="Home-songs">
            <h2 class="subtitle">Escucha la musica del momento gratis en la comunidad de Larasongs</h2>

            @include('components.songs.songCardList')

            <div class="Home-songsFooter">
                <a href="/search?resource=songs&top=50" class="Home-songsLink btn btn-primary">
                    Escucha nuestro top 50
                </a>
            </div>
        </section>

        <section class="Home-join">
            <h2 class="subtitle">Gracias por escuchar, ahora unete.</h2>

            <p class="text">Guarda pistas, sigue a artistas y crea tust listas. Y todo, gratis.</p>

            <footer class="Home-footer">
                <a href="/register" class="Home-registerButton btn btn-primary">
                    Crea tu cuenta
                </a>

                <div class="Home-login">
                    <span class="text">Ya tienes una cuenta?</span>
                    <a href="/login" class="Home-loginButton btn btn-flat">Inicia sesion</a>
                </div>
            </footer>
        </section>
    </section>
@endsection
