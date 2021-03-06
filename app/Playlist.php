<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $fillable = ['title', 'cover', 'user_id'];

    protected static function boot()
    {
        parent::boot();        
        
        static::created(function ($model) {
            $model->activities()->create([
                'user_id' => auth()->id(),
                'type' => $model->getActivityType('created')
            ]);
        });
    }
        
    // ToDo: Refactor        
    protected function getActivityType($event)
    {
        $type = strtolower((new \ReflectionClass($this))->getShortName());

        return "{$event}_{$type}";
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
