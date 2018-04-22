<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Song;

class SongController extends Controller
{
    public function index()
    {
        // ToDo: Order the items by popularity
        $songs = Song::take(10)->get();

        return view('home', compact('songs'));
    }

    public function show(Song $song)
    {
        // ToDo: Solve N+1 problem ($song->comments)
        return view('songs.detail', compact('song'));
    }
}
