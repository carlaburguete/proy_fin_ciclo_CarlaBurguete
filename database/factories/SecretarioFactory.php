<?php

namespace Database\Factories;

use App\Models\Secretario;
use Illuminate\Database\Eloquent\Factories\Factory;

class SecretarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Secretario::class;

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
            'apellido2' => $this->faker->lastName
        ];
    }
}
