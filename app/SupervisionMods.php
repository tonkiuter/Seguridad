<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupervisionMods extends Model
{
    protected $fillable = ["Codigo_Reporte",  
    "Nombre", 
    "RutaEvacuacionS", 
    "RutaEvacuacionC",  
    "RutaEvacuacionT", 
    "SalidaEmergenciaS",  
    "SalidaEmergenciaC",
    "NoObstruirS",
    "NoObstruirC",
    "CasoSismoS",
    "CasoSismoC",
    "ExtintoresS",
    "ExtintoresC",
    "ExtintoresT",
    "HidranteS",
    "HidranteC",
    "BotiquinS",
    "BotiquinC",
    "DAEs",  
    "DAEc", 
    "AlarmaS", 
    "AlarmaC", 
    "TuberiasS",
    "TuberiasC",
    "CentroCargaC",
    "CentroCargaS",
    "RampaS", 
    "RampaC",
    "AguaCorrienteC",  
    "MaestroEnergiaS", 
    "MaestroEnergiaC", 
    "MaestroGasS",
    "MaestroGasC", 
    "Drenaje", 
    "Iluminacion", 
    "Ventilacion" , 
    "Nom026S", 
    "Nom026C",
    "Nom002S", 
    "Nom002C"];

}
