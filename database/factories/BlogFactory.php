<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Blog::class, function (Faker $faker) {
    $blog_categories = \App\Models\Category::where('type','=',3)->pluck('id');
    return [
        'image' => $faker->imageUrl($width = 640, $height = 480,'cats'),
        'view' => $faker->numberBetween(0,150),
        'isVisible' => $faker->boolean,
        'category_id' => $faker->randomElement($blog_categories),
    ];
});
