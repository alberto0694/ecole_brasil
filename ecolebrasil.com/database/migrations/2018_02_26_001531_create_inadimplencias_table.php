<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInadimplenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inadimplencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('nome');
            $table->string('valor');
            $table->string('max_parcelas');
            $table->longText('razao_pagamento');
            $table->string('pagar_data');
            $table->string('pago')->default('N');
            $table->timestamp('vencimento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inadimplencias');
    }
}
