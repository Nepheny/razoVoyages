<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween(1, 20),
        'voyage_id' => $faker->numberBetween(1, 5)
    ];
});
