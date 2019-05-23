<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Result;
use Faker\Generator as Faker;

$factory->define(Result::class, function (Faker $faker) {
    return [
        'recipe' => $faker->randomFloat(2, 50, 3000),
        'voyage_id' => $faker->numberBetween(1, 20)
    ];
});
