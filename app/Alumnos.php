<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $fillable = ['Codigo', 'Nombre', 'ApellidoP', 'ApellidoM', 'Carrera', 'Telefono', 'Nacimiento', 'Correo'];
}
