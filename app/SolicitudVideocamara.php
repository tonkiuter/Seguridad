<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudVideocamara extends Model
{
    protected $fillable = ['CodigoReporte', 'CodigoAlumno','Fecha','NoCamara','Atendio','Horario','Hecho','FotoIdF','FotoIdB', 'Descripcion'];
}
