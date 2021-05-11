<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaAdministrativa extends Model
{
    protected $fillable = ['CodigoReporte','NoOficio','Lugar','CodigoAlumno','NombreAlumno','Causa'];
    
}
