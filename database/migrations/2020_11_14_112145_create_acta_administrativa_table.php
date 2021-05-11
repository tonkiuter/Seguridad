<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActaAdministrativaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_administrativas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('CodigoReporte');
            $table->bigInteger('NoOficio');
            $table->string('Lugar');
            $table->bigInteger('CodigoAlumno');
            $table->string('Causa');
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
        Schema::dropIfExists('acta_administrativas');
    }
}
