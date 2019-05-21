<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Category::class, function (Faker $faker) {
    $categories = \App\Models\Category::all()->pluck('id');
    if (count($categories) <= 4) {
        $categories = 0;
    }

    return [
        'parent_id' => $faker->randomElement($categories),
        'logo' => $faker->imageUrl($width = 640, $height = 480,'cats'),
        'type' => $faker->numberBetween(0,3),
        'color' => $faker->hexColor,
        'isVisible' => $faker->boolean,
    ];
});
