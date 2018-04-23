@extends('layouts.app')

@section('content')
  <form method="POST" action="/songs" class="CreateSong">
    @csrf
    <div>
        <label for="title">Titulo:</label>
        <div>
            <input id="title" type="text" name="title" placeholder="Titulo de la cancion" />
        </div>
    </div>

    <div>
        <label for="cover">Cover</label>
        <div>
            <input id="cover" type="text" name="cover" placeholder="Insert the url until implement image upload" />
        </div>
    </div>

    <button type="submit">Subir cancion</button>
  </form>
@endsection