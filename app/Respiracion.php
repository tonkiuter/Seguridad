<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respiracion extends Model
{
    protected $fillable = ['CodigoReporte', 'Anio', 'Mes','NumEquipo', 'TipoEquipo', 'Observaciones', 'Reviso'];

}
