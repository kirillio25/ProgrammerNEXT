<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('courses')->insert([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'quantity_hours' => $faker->numberBetween(10, 100),
                'price' => $faker->numberBetween(1000, 10000),
                'is_active' => $faker->boolean,
                'path_url' => $faker->url,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
