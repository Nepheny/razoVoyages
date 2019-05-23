<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'like' => $faker->numberBetween(0, 500),
        'title' => $faker->word,
        'content' => $faker->text,
        'active' => $faker->numberBetween(0, 1),
        'author' => $faker->name,
        'visited' => $faker->numberBetween(0, 5000),
        'voyage_id' => $faker->numberBetween(1, 20)
    ];
});
