<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Playlist;

class PlaylistController extends Controller
{
    public function show (Playlist $playlist)
    {
        // ToDo: Solve N+1 problem ($playlist->songs)
        return view('playlists.detail', compact('playlist'));
    }
}
