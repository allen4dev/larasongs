<?php

use Faker\Generator as Faker;

$factory->define(App\Playlist::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'title' => $faker->sentence,
        'photo_url' => $faker->imageUrl(400, 400, 'cats'),
    ];
});
