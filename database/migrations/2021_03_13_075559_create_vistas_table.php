<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vistas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger("Codigo_Reporte");
            $table->string("Lugar");
            $table->string("Departamento");
            $table->string("Equipo");
            $table->integer("NoEquipo");
            $table->integer("Planta");
            $table->string("Agente");
            $table->integer("CapacidadLB");
            $table->integer("CapacidadKG");
            $table->string("Soporte");
            $table->dateTime("UltimaCarga");
            $table->integer("PH");
            $table->boolean("Activado");
            $table->string("Comentarios");
            $table->boolean("Existe");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vistas');
    }
}
