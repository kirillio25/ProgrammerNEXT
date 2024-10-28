<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HomeworkStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homework_statuses')->insert([
            ['name' => 'На проверке'],
            ['name' => 'Удовлетворительно'],
            ['name' => 'Неудовлетворительно'],
        ]);
    }
}
