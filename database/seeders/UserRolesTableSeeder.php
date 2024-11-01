<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRolesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user_roles')->insert([
            ['name' => 'Пользователь'],
            ['name' => 'Ученик'],
            ['name' => 'Преподаватель'],
        ]);
    }
}
