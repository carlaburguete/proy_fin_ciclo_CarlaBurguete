<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $fillable=['id', 'fecha', 'nom_usuario_especialista', 'pendiente'];
    public $timestamps = false;
}
