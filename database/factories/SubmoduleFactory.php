<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Submodule;


class SubmoduleFactory extends Factory
{
    protected $model = Submodule::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'module_id' => $this->faker->numberBetween(1, 20),
            'is_active' => $this->faker->boolean,
            'path_url' => $this->faker->url,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
