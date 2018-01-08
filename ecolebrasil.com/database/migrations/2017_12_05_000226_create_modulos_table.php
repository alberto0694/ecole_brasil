<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulosTable extends Migration
{

    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->longText('card')->nullable();
            $table->timestamp('data_inicio');
            $table->integer('habilitado')->nullable();
            $table->longText('descricao_html');

            $table->integer('agenda_id')->unsigned();
            $table->timestamps();

            $table->foreign('agenda_id')->references('id')->on('agendas');
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
