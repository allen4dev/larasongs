@extends('layouts.app')

@section('content')
  <form method="POST" action="/playlists/{{ $playlist->id }}/songs">
    @csrf
    <select name="songs[]" multiple>
      @foreach(auth()->user()->songs as $song)
        <option value="{{ $song->id }}">{{ $song->title }}</option>
      @endforeach
    </select>

    <button type="submit">Add songs</button>
  </form>
@endsection