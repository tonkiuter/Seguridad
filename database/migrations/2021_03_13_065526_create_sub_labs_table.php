<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_labs', function (Blueprint $table) {
            $table->id();
            $table->integer("Codigo_Reporte");
            $table->string("Nombre");
            $table->boolean("RegaderaS"); 
            $table->boolean("RegaderaC"); 
            $table->boolean("LavaojosS"); 
            $table->boolean("LavaojosC"); 
            $table->boolean("BotiquinS"); 
            $table->boolean("BotiquinC"); 
            $table->boolean("ExtintoresS"); 
            $table->boolean("ExtintoresC"); 
            $table->string("ExtintoresT"); 
            $table->boolean("TuberiasS"); 
            $table->boolean("TuberiasC"); 
            $table->boolean("EquipoPersonalS");
            $table->boolean("EquipoPersonalC"); 
            $table->boolean("EvacuacionS");
            $table->boolean("EvacuacionC"); 
            $table->boolean("EvacuacionT"); 
            $table->boolean("EnCasoS"); 
            $table->boolean("EnCasoC"); 
            $table->boolean("CentroCargaS"); 
            $table->boolean("CentroCargaC"); 
            $table->boolean("AlarmaS"); 
            $table->boolean("AlarmaC"); 
            $table->boolean("SalidaEmergenciaS"); 
            $table->boolean("SalidaEmergenciaC"); 
            $table->boolean("AreaReactivosS"); 
            $table->boolean("AreaReactivosC");
            $table->boolean("KitDerrameS"); 
            $table->boolean("KitDerrameC"); 
            $table->boolean("AreaResiduosS");
            $table->boolean("AreaResiduosC");
            $table->boolean("ReglamentoInterno"); 
            $table->boolean("AguaCorrienteC"); 
            $table->boolean("MaestroEnergiaS"); 
            $table->boolean("MaestroEnergiaC"); 
            $table->boolean("MaestroGasS"); 
            $table->boolean("MaestroGasC"); 
            $table->boolean("Drenaje"); 
            $table->boolean("Iluminacion"); 
            $table->boolean("Ventilacion"); 
            $table->boolean("Nom018"); 
            $table->boolean("Nom026"); 
            $table->boolean("Nom114"); 
            $table->boolean("NOM052"); 
            $table->boolean("NOM002"); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_labs');
    }
}
