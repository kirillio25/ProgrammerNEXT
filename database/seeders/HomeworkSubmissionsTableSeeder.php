<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HomeworkSubmissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            DB::table('homework_submissions')->insert([
                'user_id' => $faker->numberBetween(1, 10),
                'submodule_id' => $faker->numberBetween(1, 20),
                'status_id' => $faker->numberBetween(1, 3),
                'deadline' => $faker->boolean,
                'path_url' => $faker->url,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
