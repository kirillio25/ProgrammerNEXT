<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            CoursesTableSeeder::class,
            ModulesTableSeeder::class,
            SubmodulesTableSeeder::class,
            LessonsTableSeeder::class,
            HomeworkFilesTableSeeder::class,
            HomeworkStatusesTableSeeder::class,
            HomeworkSubmissionsTableSeeder::class,
            CommentsTableSeeder::class,
            CommentLikesTableSeeder::class,
            UserRolesTableSeeder::class,
        ]);
    }
}
