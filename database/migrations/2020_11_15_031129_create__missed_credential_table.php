<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissedCredentialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missed_crendetials', function (Blueprint $table) {
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
        Schema::dropIfExists('missed_crendetials');
    }
}
