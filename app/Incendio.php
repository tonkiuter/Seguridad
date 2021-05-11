<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incendio extends Model
{
    protected $fillable = ['CodigoReporte', 'Anio', 'Mes', 'NumEquipo', 'TipoEquipo', 'Planta', 'Agente', 'CapacidadLB', 'CapacidadKG', 'Soporte', 'UltimaRecarga', 'PH', 'Actividad', 'Comentario', 'Existe'];
}
