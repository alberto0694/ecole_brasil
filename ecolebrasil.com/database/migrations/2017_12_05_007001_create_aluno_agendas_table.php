<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('aluno_id')->unsigned();
            $table->integer('agenda_id')->unsigned();

            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->foreign('agenda_id')->references('id')->on('agendas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('aluno_cursos');
    }
}
