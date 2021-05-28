<?php

namespace Database\Seeders;
use App\Models\Especialista;
use Illuminate\Database\Seeder;

class EspecialistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especialista::factory()->count(10)->create();
    }
}
