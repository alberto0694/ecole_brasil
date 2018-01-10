<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulaComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aula_comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aula_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('comentario');
            $table->timestamps();

            $table->foreign('aula_id')->references('id')->on('aulas'); 
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
        Schema::dropIfExists('aula_comentarios');
    }
}
