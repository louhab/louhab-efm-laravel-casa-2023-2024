<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [
            'nom' => $this->faker->name,
            'description' => $this->faker->text,
        ];
    }
}
