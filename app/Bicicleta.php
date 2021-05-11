<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicicleta extends Model
{
    protected $fillable = ['CodigoReporte', 'CodigoAlumno', 'FotoIdF', 'FotoIdB', 'Descripcion'];
}
