<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeworkSubmission;


class HomeworkSubmissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeworkSubmission::factory()->count(30)->create();
    }
}
