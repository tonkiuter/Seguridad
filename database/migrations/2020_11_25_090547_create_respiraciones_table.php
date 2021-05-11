<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespiracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respiracions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('CodigoReporte');
            $table->integer('Anio');
            $table->integer('Mes');
            $table->integer('NumEquipo');
            $table->string('TipoEquipo');
            $table->string('Observaciones');
            $table->string('Reviso');
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
        Schema::dropIfExists('respiracions');
    }
}
