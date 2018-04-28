<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Playlist;
use App\Song;

class AddSongController extends Controller
{
    public function create(Playlist $playlist)
    {
        return view('playlists.addSong', compact('playlist'));
    }

    public function store(Playlist $playlist)
    {
        $playlist->songs()->attach(request()->songs);

        return redirect("/playlists/{$playlist->id}");
    }
}
