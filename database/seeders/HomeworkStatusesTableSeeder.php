<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeworkStatusesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('homework_statuses')->insert([
            ['name' => 'На проверке'],
            ['name' => 'Удовлетворительно'],
            ['name' => 'Неудовлетворительно'],
        ]);
    }
}
