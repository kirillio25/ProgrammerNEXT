<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Создание нескольких случайных пользователей
        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Задать стандартный пароль
                'role_id' => $faker->numberBetween(1, 3), // Можно установить значение между 1 и 3
                'remember_token' => $faker->regexify('[A-Za-z0-9]{10}'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
