<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('formacao_id')->unsigned();
            $table->string('nome');
            $table->string('link_video');
            $table->timestamp('data_inicio');
            $table->longText('background_img');
            $table->string('carga_horaria');
            $table->longText('card');
            $table->string('investimento');
            $table->string('modelo');
            $table->longText('ministrantes');
            $table->longText('conteudo');
            $table->longText('apresentacao');
            $table->longText('objetivos');
            $table->longText('material');
            $table->timestamps();      

            $table->foreign('formacao_id')->references('id')->on('formacaos');      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
