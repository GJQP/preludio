<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeatrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teatros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nombre', 255);
            $table->string('rif', 10)->unique();
            $table->text('direccion')->default("");
            $table->string('telefono', 12)->default("0000-0000000");
            $table->string('facebook', 200)->nullable();
            $table->string('twitter', 200)->nullable();
            $table->string('instagram', 200)->nullable();
            $table->longText('imagenes')->nullable();
            $table->boolean('activo')->default(false);

            $table->dateTime('fecha_creacion'); //Sustituye created_at
            $table->dateTime('fecha_modificacion'); //Sustituye updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teatros');
    }
}
