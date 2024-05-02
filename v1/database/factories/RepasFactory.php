<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RepasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'intitule' => $this->faker->name,
            'description' => $this->faker->text,
            'categorie_id' => 1,
        ];
    }
}
