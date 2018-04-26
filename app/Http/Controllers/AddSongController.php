<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Song;

class AddSongController extends Controller
{
    public function store(Song $song)
    {
        dd($song);
    }
}
