<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterWebsite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('depoimentos', function (Blueprint $table) {
            $table->string('visible')->nullable()->default('1');
        });
        Schema::table('consultoras', function (Blueprint $table) {
            $table->string('visible')->nullable()->default('1');
        });
        Schema::table('banners', function (Blueprint $table) {
            $table->string('visible')->nullable()->default('1');
        });
        Schema::table('material_restritos', function (Blueprint $table) {
            $table->string('visible')->nullable()->default('1');
        });
        Schema::table('ebooks', function (Blueprint $table) {
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
