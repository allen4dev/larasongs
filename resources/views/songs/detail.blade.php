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
            <span class="Song-infoArtist tag">{{ $song->user->name }}</span>
            <h1 class="Song-infoTitle tag">{{ $song->title }}</h1>
          </div>

          <span class="Song-infoDate">{{ $song->created_at }}</span>
        </header>
      </section>

      <section class="Song-media">
        Put the media bar here
      </section>

      <figure class="Song-photo">
        <img class="Song-photoImage" src="{{ $song->cover }}" alt="{{ $song->title }}" />
      </figure>
    </section>

    <section class="Song-content">
      <article class="Song-actions">
        <section class="CommentBar">
          <form class="CommentBar-form">
            <input class="CommentBar-input" type="text" placeholder="Escriba un comentario"/>
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