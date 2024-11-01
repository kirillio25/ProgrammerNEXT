<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lesson;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    protected $model = Lesson::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'submodule_id' => $this->faker->numberBetween(1, 20),
            'module_id' => $this->faker->numberBetween(1, 20),
            'lesson_url' => $this->faker->url,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
