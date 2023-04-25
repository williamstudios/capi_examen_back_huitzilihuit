<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domicilio' => "Domicilio de prueba",
            'numero_exterior' => "154",
            'colonia' => "Colonia Prueba",
            'cp' => "645",
            'ciudad' => "Monterrey",
            'fecha_nacimento' => "2023-04-05",
        ];
    }
}
