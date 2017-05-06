<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('course_types')->insert([
        'name' => str_random(10),
        'unit' => str_random(10)
       ]);

    }
}
