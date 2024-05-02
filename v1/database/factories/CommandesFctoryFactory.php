<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommandesFctoryFactory extends Factory
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
            'intitule' => $this->faker->name,
            'description' =>  $this->faker->password,
            'categorie_id' => 1
        ];
    }
}
