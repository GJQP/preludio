<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriaPresentacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria_presentaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('presentacion_id');
            $table->string('url_imagen');

            $table->dateTime('fecha_creacion'); //Sustituye created_at
            $table->dateTime('fecha_modificacion'); //Sustituye updated_at

            $table->foreign('presentacion_id')->references('id')->on('presentaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeria_presentaciones');
    }
}
