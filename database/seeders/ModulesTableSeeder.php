<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module;


class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Module::factory()->count(20)->create();
    }
}
