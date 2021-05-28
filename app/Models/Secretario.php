<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretario extends Model
{
    use HasFactory;
    protected $fillable=['nom_usuario', 'password', 'nombre', 'apellido1', 'apellido2'];
    public $timestamps = false;
}
