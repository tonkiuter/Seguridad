<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FalloCamara extends Model
{
    protected $fillable = ['CodigoReporte', 'NoCamara', 'Informacion', 'IP', 'SITE','Modulo','Marca','ModeloSwitch','DescFalla','Toreos','Diagnostico','MateriaUt','Solucionado','Observaciones'];

}
