<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaseSalida extends Model
{
    protected $fillable = ['CodigoReporte', 'CodigoAlumno', 'FotoIdF','FotoIdB', 'Sello', 'Descripcion', 'Fecha'];
}
