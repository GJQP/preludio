<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriaTeatrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria_teatros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('teatro_id');
            $table->string('url_imagen');

            $table->dateTime('fecha_creacion'); //Sustituye created_at
            $table->dateTime('fecha_modificacion'); //Sustituye updated_at

            $table->foreign('teatro_id')->references('id')->on('teatros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeria_teatros');
    }
}
