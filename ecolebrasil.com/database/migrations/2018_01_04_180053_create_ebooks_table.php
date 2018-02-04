<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEbooksTable extends Migration
{

    public function up()
    {
        Schema::create('ebooks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('valor');
            $table->longText('card');
            $table->integer('transacao');
            $table->integer('max_parcelas');
            $table->string('link')->nullable();
            $table->longText('file')->nullable();
            // $table->integer('curso_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ebooks');
    }
}
