@extends('layouts.app')

@section('content')
  <section class="Playlists">
    @forelse($playlists as $playlist)
      <article class="PlaylistCard">
        <figure class="PlaylistCard-cover">
          <img class="PlaylistCard-image" src="{{ $playlist->cover }}" alt="{{ $playlist->title }}">
        
          <figcaption class="PlaylistCard-details">
            <h4 class="PlaylistCard-title">
              <a href="{{ route('playlists.detail', $playlist) }}">{{ $playlist->title }}</a>
            </h4>
          </figcaption>
        </figure>
      </article>
    @empty
      <p class="text">Your playlists is empty.</p>
    @endforelse
  </section>
@endsection