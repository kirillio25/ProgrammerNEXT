<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\HomeworkFile;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeworkFile>
 */
class HomeworkFileFactory extends Factory
{
    protected $model = HomeworkFile::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'submodule_id' => $this->faker->numberBetween(1, 20),
            'module_id' => $this->faker->numberBetween(1, 20),
            'path_url' => $this->faker->url,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
