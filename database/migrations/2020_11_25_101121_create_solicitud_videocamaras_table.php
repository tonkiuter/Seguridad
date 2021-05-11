<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudVideocamarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_videocamaras', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('CodigoReporte');
            $table->bigInteger('CodigoAlumno');
            $table->string('Atendio');
            $table->date('Fecha');
            $table->integer('NoCamara');
            $table->string('Horario');
            $table->string('Hecho');
            $table->string('FotoIdF');
            $table->string('FotoIdB');
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
        Schema::dropIfExists('solicitud_videocamaras');
    }
}
