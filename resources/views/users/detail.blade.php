@extends('layouts.app')

@section('content')
  <section class="User">
    <header class="User-heading">
      <figure class="User-avatar">
        <img src="http://lorempixel.com/250/250/cats" alt="Username" class="User-image">
      </figure>

      <div class="User-info">
        <h4 class="User-username tag">{Username}</h4>
        <span class="User-fullname tag">{{ $user->name }}</h4>
      </div>
    </header>

    <section class="User-content">
      <section class="User-activity">
        <ul class="ResourceList">
          <li class="ResourceList-item"><a href="#" class="ResourceList-link">Todo</a></li>
          <li class="ResourceList-item"><a href="#" class="ResourceList-link">Pistas</a></li>
          <li class="ResourceList-item"><a href="#" class="ResourceList-link">Albumes</a></li>
          <li class="ResourceList-item"><a href="#" class="ResourceList-link">Listas</a></li>
          <li class="ResourceList-item"><a href="#" class="ResourceList-link">Reposts</a></li>
        </ul>

        <section class="Activity">
          Put the last activity here
        </section>
      </section>

      <section class="User-details">
        <header class="User-detailsHeader">
          <ul class="User-actions">
            <li class="User-actionItem">
              <a href="#" class="User-actionLink">Seguir</a>
            </li>
            <li class="User-actionItem">
              <a href="#" class="User-actionLink">Compartir</a>
            </li>
            <li class="User-actionItem">
              <a href="#" class="User-actionLink">Denunciar</a>
            </li>
          </ul>
        </header>

        <ul class="User-stats">
          <li class="User-stat">
            <span class="User-statTitle">Seguidores</span>
            <span class="User-statCount">521</span>
          </li>
          <li class="User-stat">
            <span class="User-statTitle">Siguiendo</span>
            <span class="User-statCount">1879</span>
          </li>
          <li class="User-stat">
            <span class="User-statTitle">Pistas</span>
            <span class="User-statCount">78</span>
          </li>
        </ul>

        <section class="User-lastActivity">
          Put here the last activity of every resource
        </section>
      </section>
    </section>



  </section>
@endsection