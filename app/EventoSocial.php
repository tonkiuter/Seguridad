<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoSocial extends Model
{
    protected $fillable = ['CodigoReporte','NombreEvento','FechaHora','Pronostico','MensajeSeguridad','Estrategia','Recurso','Croquis','Organigrama','Estado','NombreEncargado','TelefonoEncargado','CorreoEncargado'];
}
