<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable=['id', 'nom_usuario', 'password', 'nombre', 'apellido1', 'apellido2', 'dni', 'telefono', 'direccion', 'cp', 'localidad', 'provincia', 'num_emergencia', 'f_nacimiento', 'email', 'historial', 'tratamiento', 'evolucion'];
    public $timestamps = false;
}
