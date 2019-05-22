<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Voyage;
use Faker\Generator as Faker;

$factory->define(Voyage::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'image' => $faker->imageUrl($width = 640, $height = 480, 'city'),
        'price' => $faker->randomFloat(2, 50, 3000),
        'destination' => $faker->country,
        'description' => $faker->text
    ];
});
