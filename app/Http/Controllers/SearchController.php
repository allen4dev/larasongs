<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filters\PostFilters;

use App\Song;

class SearchController extends Controller
{
    public function index(Request $request, PostFilters $filters)
    {
        $songs = Song::filter($filters)->get();
        
        return view('search.index', compact('songs'));
    }
}
