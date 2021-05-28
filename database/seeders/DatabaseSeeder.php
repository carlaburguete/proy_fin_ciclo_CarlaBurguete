<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdministradorSeeder::class);
        $this->call(CitaSeeder::class);
        $this->call(EspecialistaSeeder::class);
        $this->call(EvolucionSeeder::class);
        $this->call(PacienteSeeder::class);
        $this->call(SecretarioSeeder::class);
    }
}
