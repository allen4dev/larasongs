@extends('layouts.app')

@section('content')
  <section class="Playlist">
    <section class="Playlist-detail">
      <section class="Playlist-info">
        <header class="Playlist-infoHeader">
          <div class="Playlist-infoDetail">
            <span class="Playlist-infoArtist tag">{{ $playlist->user->name}}</span>
            <h1 class="Playlist-infoTitle tag">{{ $playlist->title }}</h1>
          </div>

          <span class="Playlist-infoDate">{{ $playlist->created_at }}</span>
        </header>
      </section>

      <figure class="Playlist-photo">
        <img class="Playlist-photoImage" src="{{ $playlist->cover }}" alt="{{ $playlist->title }}" />
      </figure>
    </section>

    <section class="Playlist-content">
      <article class="Playlist-actions">
        <section class="Actions">
          <div class="Actions-user">
            <a href="#" class="Actions-button btn btn-flat">Te gusta</a>
            <a href="#" class="Actions-button btn btn-flat">Repostear</a>
            <a href="#" class="Actions-button btn btn-flat">Compartir</a>
            <a href="#" class="Actions-button btn btn-flat">Mas</a>
          </div>

          <div class="Actions-info">
            <span class="Actions-infoItem">➡ 2250</span>
            <span class="Actions-infoItem">💓 756</span>
            <span class="Actions-infoItem">🎛 76</span>
          </div>
        </section>

        <section class="Playlist-activity">
          <article class="UserCard">
            <figure class="UserCard-avatar">
              <img class="UserCard-image" src="http://lorempixel.com/400/400/cats" alt="Username" />
            </figure>

            <section class="UserCard-detail">
              <header class="UserCard-header">
                <h4 class="UserCard-username">Username</h4>
              </header>

              <ul class="UserCard-count">
                <li class="UserCard-countItem">🙎 18</li>
                <li class="UserCard-countItem">🎵 8</li>
              </ul>

              <footer class="UserCard-actions">
                <a href="#" class="UserCard-action btn btn-primary">
                  Seguir
                </a>
                <a href="#" class="UserCard-action btn btn-flat">
                  Denunciar
                </a>
              </footer>
            </section>
          </article>

          <ul class="SongList">
            @forelse ($playlist->songs as $song)
              <li class="SongRow">
                <h4 class="SongRow-title">{{ $song->title }}</h4>
                <span class="SongRow-playCount">➡ 2145</span>
              </li>
            @empty
              This playlist has no songs.
            @endforelse
          </ul>
        </section>
      </article>
    </section>
  </section>
@endsection