<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    protected $fillable = ['CodigoReporte', 'CodigoAlumno', 'CodigoHistorial'];
}
