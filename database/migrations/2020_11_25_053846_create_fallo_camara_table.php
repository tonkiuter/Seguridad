<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFalloCamaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fallo_camaras', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('CodigoReporte');
            $table->integer('NoCamara');
            $table->string('Informacion');
            $table->bigInteger('IP');
            $table->string('SITE');
            $table->string('Modulo');
            $table->string('Marca');
            $table->string('DescFalla');
            $table->integer('Toreos');
            $table->string('MateriaUt');
            $table->integer('Solucionado');  //Debería ser boleano
            $table->string('Observaciones');
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
        Schema::dropIfExists('fallo_camaras');
    }
}
