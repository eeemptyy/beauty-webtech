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
        App\Role::create(['name' => 'admin']);
        App\Role::create(['name' => 'customer']);

        App\User::create([
            'firstname' => 'Tar',
            'lastname' => 'Ksb',
            'email' => 'tar.ksb@ku.th',
            'password' => bcrypt('123456'),
            'role_id' => '2'
        ]);
        App\User::create([
            'firstname' => 'Nook',
            'lastname' => 'Dum',
            'email' => 'nook.d@ku.th',
            'password' => bcrypt('111111'),
            'role_id' => '2'
        ]);
        App\User::create([
            'firstname' => 'Bat',
            'lastname' => 'Man',
            'email' => 'bat.man@ku.th',
            'password' => bcrypt('555555'),
            'role_id' => '1'
        ]);
        App\User::create([
            'firstname' => 'Jompol',
            'lastname' => 'Sermsook',
            'email' => 'jompol.s@ku.th',
            'password' => bcrypt('123456'),
            'role_id' => '1'
        ]);
        App\CourseType::create([
            'name' => 'course',
            'unit' => 'bath'
        ]);
        App\CourseType::create([
            'name' => 'voucher',
            'unit' => 'point'
        ]);

        App\Course::create([
            'name' => 'ACNE',
            'detail' => 'Kum jud sive',
            'price' => '1000',
            'bonus_point' => 0,
            'status' => true,
            'type_id' => 1,
            'category' => 'face',
            'pic_path' => '...'
        ]);
        App\Course::create([
            'name' => 'DETOX',
            'detail' => 'Kum jud naaa',
            'price' => '3000',
            'bonus_point' => 0,
            'status' => true,
            'type_id' => 1,
            'category' => 'body',
            'pic_path' => '...'
        ]);
        App\Course::create([
            'name' => 'Carboxy',
            'detail' => 'Kum jud Carb',
            'price' => '500',
            'bonus_point' => 0,
            'status' => true,
            'type_id' => 1,
            'category' => 'Kra chub sus suan',
            'pic_path' => '...'
        ]);
        App\Course::create([
            'name' => 'VIP Laser',
            'detail' => 'Kum jud laser',
            'price' => '2700',
            'bonus_point' => 0,
            'status' => true,
            'type_id' => 1,
            'category' => 'laser',
            'pic_path' => '...'
        ]);
        App\Course::create([
            'name' => 'Facial Design',
            'detail' => 'Kum jud Bai na',
            'price' => '1750',
            'bonus_point' => 0,
            'status' => true,
            'type_id' => 1,
            'category' => 'modified face',
            'pic_path' => '...'
        ]);
        App\Course::create([
            'name' => 'Botox Lift',
            'detail' => 'Kum jud Lift',
            'price' => '7500',
            'bonus_point' => 0,
            'status' => true,
            'type_id' => 2,
            'category' => 'Chance Point face',
            'pic_path' => '...'
        ]);
        App\Promotion::create([
            'course_id' => 1,
            'discount' => 10,
            'date_start' => '2017-5-1',
            'date_end' => '2017-5-30'
        ]);
        App\Promotion::create([
            'course_id' => 2,
            'discount' => 15,
            'date_start' => '2017-5-1',
            'date_end' => '2017-5-30'
        ]);
        App\History::create([
            'user_id' => 1,
            'course_id' => 1,
            'date_purchase' => '2017-5-2'
        ]);
        App\History::create([
            'user_id' => 1,
            'course_id' => 2,
            'date_purchase' => '2017-5-3'
        ]);
        App\History::create([
            'user_id' => 2,
            'course_id' => 2,
            'date_purchase' => '2017-5-3'
        ]);
        App\CourseCouter::create([
            'course_id' => 1,
            'counter' => 1,
            'date' => '2017-5-2'
        ]);
        App\CourseCouter::create([
            'course_id' => 1,
            'counter' => 2,
            'date' => '2017-5-3'
        ]);

    }
}
