<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::factory()->count(30)->create();

        Comment::factory()->count(20)->create([
            'parent_id' => fn() => Comment::inRandomOrder()->first()->id,
        ]);
    }
}
