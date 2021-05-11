<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudLabs extends Model
{
    protected $fillable = [
        'Codigo_Reporte',
        'Nombre',
        'RegaderaS',
        'RegaderaC',
        'LavaojosS',
        'LavaojosC',
        'BotiquinS',
        'BotiquinC',
        'ExtintoresS',
        'ExtintoresC',
        'ExtintoresT',
        'TuberiasS',
        'TuberiasC',
        'EquipoPersonalS',
        'EquipoPersonalC',
        'EvacuacionS',
        'EvacuacionC',
        'EvacuacionT',
        'EnCasoS',
        'EnCasoC',
        'CentroCargaS',
        'CentroCargaC',
        'AlarmaS',
        'AlarmaC',
        'SalidaEmergenciaS',
        'SalidaEmergenciaC',
        'AreaReactivosS',
        'AreaReactivosC',
        'KitDerrameS',
        'KitDerrameC',
        'AreaResiduosS',
        'AreaResiduosC',
        'ReglamentoInterno',
        'AguaCorrienteC',
        'MaestroEnergiaS',
        'MaestroEnergiaC',
        'MaestroGasS',
        'MaestroGasC',
        'Drenaje',
        'Iluminacion',
        'Ventilacion',
        'Nom018',
        'Nom026',
        'Nom114',
        'NOM052',
        'NOM002'
    ];

}
