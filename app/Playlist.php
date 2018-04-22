<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
