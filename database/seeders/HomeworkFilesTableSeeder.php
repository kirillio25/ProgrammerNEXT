<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeworkFile;

class HomeworkFilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeworkFile::factory()->count(30)->create();
    }
}
