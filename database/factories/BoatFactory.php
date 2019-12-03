<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Boat;
use Faker\Generator as Faker;

$factory->define(Boat::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph($nbSentences = 15)
    ];
});
