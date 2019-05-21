<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Property::class, function (Faker $faker) {
    $places =\App\Models\Place::all()->pluck('id');
    return [
        'place_id' => $faker->randomElement($places),
        'isVisible' => $faker->boolean,
    ];
});
