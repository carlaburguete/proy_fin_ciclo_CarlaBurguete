<?php

namespace Database\Factories;

use App\Models\Evolucion;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvolucionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evolucion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha' => $this->faker->dateTimeThisYear,
            'descripcion' => $this->faker->lastName
        ];
    }
}
