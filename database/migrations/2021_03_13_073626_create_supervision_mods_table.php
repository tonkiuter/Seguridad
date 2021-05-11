<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupervisionModsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervision_mods', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger("Codigo_Reporte");  
            $table->string("Nombre"); 
            $table->boolean("RutaEvacuacionS"); 
            $table->boolean("RutaEvacuacionC");  
            $table->string("RutaEvacuacionT"); 
            $table->boolean("SalidaEmergenciaS");  
            $table->boolean("SalidaEmergenciaC");
            $table->boolean("NoObstruirS");
            $table->boolean("NoObstruirC");
            $table->boolean("CasoSismoS");
            $table->boolean("CasoSismoC");
            $table->boolean("ExtintoresS");
            $table->boolean("ExtintoresC");
            $table->boolean("ExtintoresT");
            $table->boolean("HidranteS");
            $table->boolean("HidranteC");
            $table->boolean("BotiquinS");
            $table->boolean("BotiquinC");
            $table->boolean("DAEs");  
            $table->boolean("DAEc"); 
            $table->boolean("AlarmaS"); 
            $table->boolean("AlarmaC"); 
            $table->boolean("TuberiasS");
            $table->boolean("TuberiasC");
            $table->boolean("CentroCargaC");
            $table->boolean("CentroCargaS");
            $table->boolean("RampaS"); 
            $table->boolean("RampaC");
            $table->boolean("AguaCorrienteC");  
            $table->boolean("MaestroEnergiaS"); 
            $table->boolean("MaestroEnergiaC"); 
            $table->boolean("MaestroGasS");
            $table->boolean("MaestroGasC"); 
            $table->boolean("Drenaje"); 
            $table->boolean("Iluminacion"); 
            $table->boolean("Ventilacion" ); 
            $table->boolean("Nom026S"); 
            $table->boolean("Nom026C");
            $table->integer("Nom002S"); 
            $table->integer("Nom002C");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supervision_mods');
    }
}
