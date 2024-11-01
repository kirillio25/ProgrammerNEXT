<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CommentLike;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CommentLike>
 */
class CommentLikeFactory extends Factory
{
    protected $model = CommentLike::class;

    public function definition()
    {
        return [
            'comment_id' => $this->faker->numberBetween(1, 50),
            'created_at' => now(),
        ];
    }
}
