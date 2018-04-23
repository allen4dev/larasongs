<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Song;
use App\Comment;

class CommentController extends Controller
{
    public function store(Song $song)
    {
        // ToDo: Validate input
        $comment = new Comment;
        $comment->body = request()->body;
        $comment->user_id = 1;

        $song->comments()->save($comment);

        return redirect("/songs/{$song->id}");
    }
}
