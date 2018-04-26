<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $fillable = ['title', 'cover', 'user_id'];

    protected static function boot(Type $var = null)
    {
        parent::boot();

        static::created(function ($model) {
            $model->activities()->create([
                'user_id' => auth()->id(),
            ]);
        });
    }

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

    public function activities()
    {
        return $this->morphMany(Activity::class, 'subject');
    }
}
