<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lesson;


class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lesson::factory()->count(30)->create();
    }
}
