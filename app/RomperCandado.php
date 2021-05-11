<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RomperCandado extends Model
{
    protected $fillable = ['CodigoReporte', 'CodigoAlumno','NombreAlumno', 'Atendio','Fecha', 'Horario', 'Descripcion','FotoIdF','FotoIdB'];

}
