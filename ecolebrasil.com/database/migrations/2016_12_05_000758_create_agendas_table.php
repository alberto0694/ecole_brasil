<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('carga_horaria');
            $table->string('datas');
            $table->string('modelo');
            $table->string('valor');
            $table->integer('max_parcelas')->default(0);
            $table->integer('transacao');
            $table->string('ministrantes')->nullable();
            $table->timestamp('data_inicio');
            $table->integer('curso_id')->unsigned();
            $table->longText('avatar')->nullable();
            $table->string('cidade');
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
        Schema::dropIfExists('agendas');
    }
}
