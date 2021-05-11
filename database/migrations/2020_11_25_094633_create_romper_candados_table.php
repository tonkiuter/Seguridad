<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRomperCandadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('romper_candados', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('CodigoReporte');
            $table->bigInteger('CodigoAlumno');
            $table->string('FotoIdF');
            $table->string('FotoIdB');
            $table->string('Descripcion');
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
        Schema::dropIfExists('romper_candados');
    }
}
