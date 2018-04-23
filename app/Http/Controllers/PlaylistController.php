<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Playlist;

class PlaylistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function show (Playlist $playlist)
    {
        // ToDo: Solve N+1 problem ($playlist->songs)
        $resource = $playlist;
        $user = $playlist->user;
        
        return view('playlists.detail', compact('resource','user'));
    }

    public function create()
    {
        return view('playlists.create');
    }

    public function store()
    {
        // ToDo: Validate the input
        Playlist::create([
            'title' => request()->title,
            'cover' => request()->cover,
            'user_id' => auth()->id(),
        ]);

        return redirect()->home();
    }
}
