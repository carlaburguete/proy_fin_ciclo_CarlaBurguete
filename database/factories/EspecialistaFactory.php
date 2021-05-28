<?php

namespace Database\Factories;

use App\Models\Especialista;
use Illuminate\Database\Eloquent\Factories\Factory;

class EspecialistaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Especialista::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_usuario' => $this->faker->userName,
            'password' => $this->faker->password,
            'nombre' => $this->faker->name,
            'apellido1' => $this->faker->lastName,
            'apellido2' => $this->faker->lastName,
            'categoria' => $this->faker->lastName
            //
        ];
    }
}
