<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterModulosRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->string('visible')->nullable()->default('1');
        });
        Schema::table('exercicios', function (Blueprint $table) {
            $table->string('visible')->nullable()->default('1');
        });
        Schema::table('materials', function (Blueprint $table) {
            $table->string('visible')->nullable()->default('1');
        });
        Schema::table('aulas', function (Blueprint $table) {
            $table->string('visible')->nullable()->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
