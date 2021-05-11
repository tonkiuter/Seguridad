<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $fillable = ['CodigoReporte', 'CodigoAlumno', 'FechaHora', 'Ubicacion', 'Descripcion', 'ObjetosP', 'FotoId', 'Estatura', 
                            'Apariencia', 'Tez', 'Cabello', 'Ojos', 'Cara', 'Boca', 'TipoRopa','Gorra', 'EdadAprox', 'Cicatrices', 'Tatuajes', 'Piercing',
                            'OtraS', 'Huida', 'Observacion'];

}
