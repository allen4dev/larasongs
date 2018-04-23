@extends('layouts.app')

@section('content')
  <section SongCard>
    <section class="Song-detail">
      <section class="Song-info">
        <button class="Song-infoButton btn btn-play">
          ➡
        </button>

        <header class="Song-infoHeader">
          <div class="Song-infoDetail">
            <span class="Song-infoArtist tag">{{ $user->name }}</span>
            <h1 class="Song-infoTitle tag">{{ $resource->title }}</h1>
          </div>

          <span class="Song-infoDate">{{ $resource->created_at }}</span>
        </header>
      </section>

      <section class="Song-media">
        Put the media bar here
      </section>

      <figure class="Song-photo">
        <img class="Song-photoImage" src="{{ $resource->cover }}" alt="{{ $resource->title }}" />
      </figure>
    </section>

    <section class="Song-content">
      <article class="Song-actions">
        <section class="CommentBar">
          <form method="POST" action="/songs/{{ $resource->id }}/comments" class="CommentBar-form">
            @csrf
            <input class="CommentBar-input" type="text" name="body" placeholder="Escriba un comentario"/>
          </form>
        </section>

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

        <section class="Song-activity">
          @include('components.users.card')

          @include('components.comments.commentList')
        </section>
      </article>

      <aside class="Recommendations">
        <header class="Recommendations-heading">
          <h3 class="Recommendations-title">🎵 Pistas similares</h3>
          <a href="#" class="Recommendations-link">Ver todo</a>
        </header>

        <ul>
          Make Recommendations a component, changing depending of
          the resource using polymorphic relationships.
        </ul>
      </aside>
    </section>
  </section>
@endsection