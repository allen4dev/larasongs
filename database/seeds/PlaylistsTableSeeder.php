<?php

use Illuminate\Database\Seeder;

class PlaylistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playlists = factory(App\Playlist::class, 5)->create();
    
        $playlists->each(function ($playlist) {
            $songs = factory(App\Song::class, 5)->create();

            $playlist->songs()->saveMany($songs);
        });
    }
}
