<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Song;

class FavoriteController extends Controller
{
    public function store(Song $song)
    {
        $song->favorites()->create([
            'user_id' => auth()->id(),
        ]);

        return back();
    }
}
