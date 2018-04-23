<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Song;

class SongController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'create']]);
    }

    public function index()
    {
        // ToDo: Order the items by popularity
        $songs = Song::latest()->take(10)->get();

        return view('home', compact('songs'));
    }

    public function show(Song $song)
    {
        // ToDo: Solve N+1 problem ($song->comments)
        return view('songs.detail', compact('song'));
    }

    public function create()
    {
        return view('songs.create');
    }

    public function store()
    {
        // ToDo: Validate the input
        Song::create([
            'title' => request()->title,
            'cover' => request()->cover,
            'user_id' => auth()->id(),
        ]);

        return redirect()->home();
    }
}
