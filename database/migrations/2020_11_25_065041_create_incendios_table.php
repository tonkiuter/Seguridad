<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncendiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incendios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('CodigoReporte');
            $table->integer('Anio');
            $table->integer('Mes');
            $table->integer('NumEquipo');
            $table->string('TipoEquipo');
            $table->integer('Planta');
            $table->string('Agente');
            $table->integer('CapacidadLB');
            $table->integer('CapacidadKG');
            $table->string('Soporte');
            $table->date('UltimaRecarga');
            $table->string('PH');
            $table->string('Actividad');
            $table->string('Comentario');
            $table->string('Existe');
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
        Schema::dropIfExists('incendios');
    }
}
