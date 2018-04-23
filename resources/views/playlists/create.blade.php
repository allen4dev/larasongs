@extends('layouts.app')

@section('content')
  <form method="POST" action="/playlists" class="CreatePlaylist">
    @csrf
    <div>
        <label for="title">Titulo:</label>
        <div>
            <input id="title" type="text" name="title" placeholder="Titulo de la lista" />
        </div>
    </div>

    <div>
        <label for="cover">Cover</label>
        <div>
            <input id="cover" type="text" name="cover" placeholder="Insert the url until implement image upload" />
        </div>
    </div>

  <button type="submit">Crear lista</button>
  </form>
@endsection