<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "place",
            'email' => "place@gmail.com",
            'password' => bcrypt('place2019C'),
        ]);
    }
}
