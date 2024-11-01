<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Submodule;


class SubmodulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Submodule::factory()->count(20)->create();
    }
}
