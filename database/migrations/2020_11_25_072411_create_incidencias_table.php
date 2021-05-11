<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('CodigoReporte');
            $table->bigInteger('CodigoAlumno');
            $table->dateTime('FechaHora');
            $table->string('Ubicacion');
            $table->string('Descripcion');
            $table->string('ObjetosP');
            $table->string('FotoId');
            $table->float('Estatura');
            $table->string('Apariencia');
            $table->string('Tez');
            $table->string('Cabello');
            $table->string('Ojos');
            $table->string('Cara');
            $table->string('Boca');
            $table->string('TipoRopa');
            $table->string('Gorra');
            $table->integer('EdadAprox');
            $table->string('Cicatrices');
            $table->string('Tatuajes');
            $table->string('Piercing');
            $table->string('OtraS');
            $table->string('Huida');
            $table->string('Observacion');
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
        Schema::dropIfExists('incidencias');
    }
}
