<?php

use Illuminate\Database\Seeder;

class WeekDayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $weekdays = array(
            array('id' => '1','created_at' => '2019-03-22 07:20:50','updated_at' => '2019-03-22 07:20:50'),
            array('id' => '2','created_at' => '2019-03-22 07:22:42','updated_at' => '2019-03-22 07:22:42'),
            array('id' => '3','created_at' => '2019-03-22 07:22:42','updated_at' => '2019-03-22 07:22:42'),
            array('id' => '4','created_at' => '2019-03-22 07:23:07','updated_at' => '2019-03-22 07:23:07'),
            array('id' => '5','created_at' => '2019-03-22 07:23:07','updated_at' => '2019-03-22 07:23:07'),
            array('id' => '6','created_at' => '2019-03-22 07:23:21','updated_at' => '2019-03-22 07:23:21'),
            array('id' => '7','created_at' => '2019-03-22 07:23:58','updated_at' => '2019-03-22 07:23:58')
        );
        foreach ($weekdays as $weekday) {
            \App\Models\Weekday::create($weekday);
        }
        $weekday_translates = array(
            array('id' => '1','lang_id' => '1','weekday_id' => '1','name' => 'Bazar ertəsi','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','lang_id' => '2','weekday_id' => '1','name' => 'Bazar ertəsi','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','lang_id' => '3','weekday_id' => '1','name' => 'Bazar ertəsi','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','lang_id' => '1','weekday_id' => '2','name' => 'Çərşənbə axşamı','created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','lang_id' => '2','weekday_id' => '2','name' => 'Çərşənbə axşamı','created_at' => NULL,'updated_at' => NULL),
            array('id' => '6','lang_id' => '3','weekday_id' => '2','name' => 'Çərşənbə axşamı','created_at' => NULL,'updated_at' => NULL),
            array('id' => '7','lang_id' => '1','weekday_id' => '3','name' => 'Çərşənbə','created_at' => NULL,'updated_at' => NULL),
            array('id' => '8','lang_id' => '2','weekday_id' => '3','name' => 'Çərşənbə','created_at' => NULL,'updated_at' => NULL),
            array('id' => '9','lang_id' => '3','weekday_id' => '3','name' => 'Çərşənbə','created_at' => NULL,'updated_at' => NULL),
            array('id' => '10','lang_id' => '1','weekday_id' => '4','name' => 'Cümə axşamı','created_at' => NULL,'updated_at' => NULL),
            array('id' => '11','lang_id' => '2','weekday_id' => '4','name' => 'Cümə axşamı','created_at' => NULL,'updated_at' => NULL),
            array('id' => '12','lang_id' => '3','weekday_id' => '4','name' => 'Cümə axşamı','created_at' => NULL,'updated_at' => NULL),
            array('id' => '13','lang_id' => '1','weekday_id' => '5','name' => 'Cümə','created_at' => NULL,'updated_at' => NULL),
            array('id' => '14','lang_id' => '2','weekday_id' => '5','name' => 'Cümə','created_at' => NULL,'updated_at' => NULL),
            array('id' => '15','lang_id' => '3','weekday_id' => '5','name' => 'Cümə','created_at' => NULL,'updated_at' => NULL),
            array('id' => '16','lang_id' => '1','weekday_id' => '6','name' => 'Şənbə','created_at' => NULL,'updated_at' => NULL),
            array('id' => '17','lang_id' => '2','weekday_id' => '6','name' => 'Şənbə','created_at' => NULL,'updated_at' => NULL),
            array('id' => '18','lang_id' => '3','weekday_id' => '6','name' => 'Şənbə','created_at' => NULL,'updated_at' => NULL),
            array('id' => '19','lang_id' => '1','weekday_id' => '7','name' => 'Bazar','created_at' => NULL,'updated_at' => NULL),
            array('id' => '20','lang_id' => '2','weekday_id' => '7','name' => 'Bazar','created_at' => NULL,'updated_at' => NULL),
            array('id' => '21','lang_id' => '3','weekday_id' => '7','name' => 'Bazar','created_at' => NULL,'updated_at' => NULL)
        );

        foreach ($weekday_translates as $weekday_translate) {
            \App\Models\WeekdayTranslate::create($weekday_translate);
        }
    }
}
