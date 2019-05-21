<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Place::class, function (Faker $faker) {
    $categories =\App\Models\Category::all()->pluck('id');
    return [
        'category_id' => $faker->randomElement($categories),
        'logo' => $faker->imageUrl($width = 640, $height = 480,'cats'),
        'image' => $faker->imageUrl($width = 640, $height = 480,'cats'),
        'service_type' => $faker->boolean,
        'isVisible' => $faker->boolean,
        'email' => $faker->freeEmail,
        'lat' => $faker->latitude($min = 40, $max = 49)  ,
        'ing' => $faker->longitude($min = 40, $max = 49)  ,
        'place_open_time' => $faker->time($format = 'H:i', $max = 'now +2 hours') .' - '.  $faker->time($format = 'H:i', $max = 'now +8 hours'),

    ];
});
