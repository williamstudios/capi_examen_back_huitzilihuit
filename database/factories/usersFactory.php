<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class usersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /*'domicilio' => $this->faker->name(),
            'numero_exterior' => $this->faker->randomElement(1,2,3,4),
            'colonia' => $this->faker->name(),
            'cp' => $this->faker->randomElement(1,2,3,4),
            'ciudad' =>  $this->faker->name(),
            'fecha_nacimento' => $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s')*/
        ];
    }
}
