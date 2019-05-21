<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
             $this->call(LanguageSeeder::class);
             $this->call(WeekDayTableSeeder::class);

            $faker = Faker\Factory::create();
            $languages = \App\Models\Language::all();
            $weekdays = \App\Models\Weekday::all();

            // Category

            for ($i = 0; $i < 100; $i++) {
                $category = factory(\App\Models\Category::class)->create();
                foreach ($languages as $language){
                    \App\Models\Category_translate::create([
                            'category_id' => $category->id,
                            'lang_id' => $language->id,
                            'name' => $faker->word
                        ]);
                }
            }

        // Blog

        for ($i = 0; $i < 100; $i++) {
            $blog = factory(\App\Models\Blog::class)->create();
            foreach ($languages as $language){
                \App\Models\Blog_translate::create([
                    'blog_id' => $blog->id,
                    'lang_id' => $language->id,
                    'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'content' => $faker->realText($maxNbChars = 200, $indexSize = 2)
                ]);
            }
        }

//              //places
//
                for ($i = 0; $i < 1200; $i++) {
                    $place = factory(\App\Models\Place::class)->create();

                    foreach ($languages as $language) {
                        \App\Models\PlaceTranslate::create([
                                'place_id' => $place->id,
                                'lang_id' => $language->id,
                                'location' => $faker->word,
                                'description' => $faker->realText($maxNbChars = 500, $indexSize = 2)
                            ]);
                    }
                    // Property
                    for ($i = 0; $i < $faker->numberBetween(20,25); $i++) {
                        $property = \App\Models\Property::create(['place_id' => $place->id,  'isVisible' => $faker->boolean]);
                        foreach ($languages as $language){
                            \App\Models\PropertyTranslate::create([
                                'property_id' => $property->id,
                                'lang_id' => $language->id,
                                'key' => $faker->word,
                                'value' => $faker->word,
                            ]);
                        }
                    }

                    // Gallery
                    for ($i = 0; $i < $faker->numberBetween(20,25); $i++) {
                        $gallery_categories = \App\Models\Category::where('type','=',1)->pluck('id');
                        \App\Models\Gallery::create([
                            'category_id' => $faker->randomElement($gallery_categories),
                            'place_id' => $place->id,
                            'image' => $faker->imageUrl($width = 640, $height = 480,'cats'),
                            'isVisible' => $faker->boolean
                        ]);
                    }

                    // Place service
                    for ($i = 0; $i < $faker->numberBetween(20,25); $i++) {
                        $place_service_categories = \App\Models\Category::where('type','=',2)->pluck('id');
                        $place_service = \App\Models\PlaceService::create([
                            'category_id' => $faker->randomElement($place_service_categories),
                            'place_id' => $place->id,
                            'image' => $faker->imageUrl($width = 640, $height = 480,'cats'),
                            'isVisible' => $faker->boolean,
                            'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 100),
                        ]);
                        foreach ($languages as $language){
                            \App\Models\PlaceServiceTranslate::create([
                                'place_service_id' => $place_service->id,
                                'lang_id' => $language->id,
                                'name' => $faker->word,
                                'description' => $faker->realText($maxNbChars = 500, $indexSize = 2)
                            ]);
                        }
                    }

                    // Place weekday
                    foreach ($weekdays as $weekday){
                        \App\Models\PlaceWeekday::create([
                            'place_id' => $place->id,
                            'weekday_id' => $weekday->id,
                            'open_time' => $faker->time($format = 'H:i', $max = 'now +2 hours') .' - '.  $faker->time($format = 'H:i', $max = 'now +8 hours'),
                        ]);
                    }

                    // Phone
                    for ($i = 0; $i < $faker->numberBetween(2,5); $i++) {
                        \App\Models\Phone::create([
                            'place_id' => $place->id,
                            'number' => $faker->phoneNumber,
                        ]);
                    }
                }

    }
}
