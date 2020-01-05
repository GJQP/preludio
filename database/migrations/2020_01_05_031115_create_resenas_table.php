<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resenas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('teatro_id')->nullable();
            $table->bigInteger('presentacion_id')->nullable();
            $table->bigInteger('user_id');
            $table->smallInteger('calificacion')->default(0);
            $table->string('comentario')->nullable();
            $table->smallInteger('numero_reportes')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resenas');
    }
}
