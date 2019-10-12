<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('obra_id');
            $table->unsignedBigInteger('teatro_id');

            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->string('poster');
            $table->longText('reparto');

            $table->dateTime('fecha_creacion'); //Sustituye created_at
            $table->dateTime('fecha_modificacion'); //Sustituye updated_at

            $table->foreign('obra_id')->references('id')->on('obras');
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
        Schema::dropIfExists('presentaciones');
    }
}
