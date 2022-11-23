<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 8) as $value) {
            DB::table('tasks')->insert([
                'task' => $faker->randomElement($array = array('I am going to start reading at 10 pm.', "I am going to celebrate my friend's birthday tomorrow.", 'I will meet with my brother tomorrow.')),
            ]);
        }
    }
}
