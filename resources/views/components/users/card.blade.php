<article class="UserCard">
  <figure class="UserCard-avatar">
    <img class="UserCard-image" src="http://lorempixel.com/400/400/cats" alt="{{$user->name }}" />
  </figure>

  <section class="UserCard-detail">
    <header class="UserCard-header">
      <h4 class="UserCard-username">{{ $user->name }}</h4>
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