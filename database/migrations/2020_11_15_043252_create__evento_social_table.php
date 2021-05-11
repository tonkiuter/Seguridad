<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoSocialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_socials', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('CodigoReporte');
            $table->string('NombreEvento');
            $table->datetime('FechaHora');
            $table->string('Pronostico');
            $table->string('MensajeSeguridad');
            $table->string('Estrategia');
            $table->string('Recurso');
            $table->string('Croquis');
            $table->string('Organigrama');
            $table->string('Estado');
            $table->string('NombreEncargado');
            $table->bigInteger('TelefonoEncargado');
            $table->string('CorreoEncargado');
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
        Schema::dropIfExists('evento_socials');
    }
}
