<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigInteger('Codigo');
            $table->string('Nombre');
            $table->string('ApellidoP'); 
            $table->string('ApellidoM'); 
            $table->string('Carrera');
            $table->bigInteger('Telefono'); 
            $table->date('Nacimiento');
            $table->string('Correo');
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
        Schema::dropIfExists('alumnos');
    }
}
