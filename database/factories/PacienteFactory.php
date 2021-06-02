<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paciente::class;

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
            'dni' => $this->faker->dni,
            'telefono' => $this->faker->phoneNumber,
            'direccion' => $this->faker->address,
            'cp' => $this->faker->postcode,
            'localidad' => $this->faker->city,
            'provincia' => $this->faker->city,
            'num_emergencia' => $this->faker->phoneNumber,
            'f_nacimiento' => $this->faker->dateTimeThisCentury,
            'email' => $this->faker->email,
            'historial' => $this,
            'tratamiento' => $this
            //
        ];
    }
}
