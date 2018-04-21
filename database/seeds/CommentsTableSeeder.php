<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 5)->create();

        $users->each(function ($user) {
            factory(App\Comment::class, 10)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
