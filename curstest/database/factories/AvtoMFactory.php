<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AvtoMFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'models' => $this->faker->models(),
            // 'id_brand' => $this->faker->id_brand(),
        ];
    }
}
