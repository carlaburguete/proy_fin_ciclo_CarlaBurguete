<?php

namespace Database\Seeders;
use App\Models\Secretario;
use Illuminate\Database\Seeder;

class SecretarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Secretario::factory()->count(5)->create();
    }
}
