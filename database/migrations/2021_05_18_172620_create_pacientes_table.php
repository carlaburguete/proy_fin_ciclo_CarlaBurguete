<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->string("nom_usuario");
            $table->string("password");
            $table->string("nombre");
            $table->string("apellido1");
            $table->string("apellido2");
            $table->string("dni");
            $table->string("telefono");
            $table->string("direccion");
            $table->string("cp");
            $table->string("localidad");
            $table->string("provincia");
            $table->string("num_emergencia");
            $table->string("f_nacimiento");
            $table->string("email");
            $table->string("historial");
            $table->string("tratamiento");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
