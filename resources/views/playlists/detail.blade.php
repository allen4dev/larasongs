@extends('layouts.app')

@section('content')
  <section class="Playlist">
    <section class="Playlist-detail">
      <section class="Playlist-info">
        <header class="Playlist-infoHeader">
          <div class="Playlist-infoDetail">
            <span class="Playlist-infoArtist tag">{{ $user->name}}</span>
            <h1 class="Playlist-infoTitle tag">{{ $resource->title }}</h1>
          </div>

          <span class="Playlist-infoDate">{{ $resource->created_at }}</span>
        </header>
      </section>

      <figure class="Playlist-photo">
        <img class="Playlist-photoImage" src="{{ $resource->cover }}" alt="{{ $resource->title }}" />
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
          
          @include('components.users.card')

          <ul class="SongList">
            @forelse ($resource->songs as $song)
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