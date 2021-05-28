<?php

namespace Database\Seeders;
use App\Models\Evolucion;
use Illuminate\Database\Seeder;

class EvolucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evolucion::factory()->count(20)->create();
    }
}
