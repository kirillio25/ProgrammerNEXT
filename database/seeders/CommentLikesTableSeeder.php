<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CommentLike;

class CommentLikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CommentLike::factory()->count(100)->create();
    }
}
