<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercicioComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercicio_comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exercicio_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('comentario');
            $table->timestamps();

            $table->foreign('exercicio_id')->references('id')->on('exercicios'); 
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercicio_comentarios');
    }
}
