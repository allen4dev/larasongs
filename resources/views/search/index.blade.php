@extends('layouts.app')

@section('content')
  <section class="Search">
    <h1 class="Search-title">Resultados para la busqueda de: {query}</h1>

    <section class="Search-results">
      <h2 class="Search-resultsTitle">Se encontraron {500} pistas</h2>

      @include('components.songs.songlist')
    </section>
  </section>
@endsection