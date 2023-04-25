<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class user_domicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domicilio' => $this->faker->name(),
            'numero_exterior' => 123,
            'colonia' => $this->faker->name(),
            'cp' => 455,
            'ciudad' =>  $this->faker->name(),
            'fecha_nacimento' => $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'updated_at' => $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'created_at' => $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        ];
    }
}
