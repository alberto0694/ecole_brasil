<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->longText('card');
            $table->timestamp('data_inicio');
            $table->integer('habilitado')->nullable();
            $table->longText('descricao_html');

            $table->integer('curso_id')->unsigned();
            $table->timestamps();

            $table->foreign('curso_id')->references('id')->on('cursos');      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulos');
    }
}
