<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            DB::table('lessons')->insert([
                'title' => $faker->sentence,
                'submodule_id' => $faker->numberBetween(1, 20),
                'module_id' => $faker->numberBetween(1, 20),
                'lesson_url' => $faker->url,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
