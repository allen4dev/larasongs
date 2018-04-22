<?php

use Faker\Generator as Faker;

$types = ['App\Song', 'App\Playlist'];

$factory->define(App\Comment::class, function (Faker $faker) use ($types) {
    $type = $types[array_rand($types)];

    $resource = factory($type)->create();

    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'body' => $faker->text,
        'commentable_id' => $resource->id,
        'commentable_type' => $type,
    ];
});
