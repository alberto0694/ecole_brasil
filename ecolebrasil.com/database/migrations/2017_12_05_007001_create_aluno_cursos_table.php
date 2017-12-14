<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('aluno_id')->unsigned();
            $table->integer('curso_id')->unsigned();

            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->foreign('curso_id')->references('id')->on('cursos');
        });

        // Schema::table('alunos', function (Blueprint $table) {
        //     $table->integer('aluno_curso_id')->unsigned();
            
        // });        

        // Schema::table('cursos', function (Blueprint $table) {
        //     $table->integer('curso_aluno_id')->unsigned();
        //     $table->foreign('curso_aluno_id')->references('curso_id')->on('users');
        // });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_cursos');
    }
}
