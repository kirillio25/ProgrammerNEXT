<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\HomeworkSubmission;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeworkSubmission>
 */
class HomeworkSubmissionFactory extends Factory
{
    protected $model = HomeworkSubmission::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'submodule_id' => $this->faker->numberBetween(1, 20),
            'status_id' => $this->faker->numberBetween(1, 3),
            'deadline' => $this->faker->boolean,
            'path_url' => $this->faker->url,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
