<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
            $table->increments('DIR_id');
            $table->string('DIR_calle')->nullable();
            $table->string('DIR_colonia')->nullable();
            $table->string('DIR_estado')->nullable();
            $table->string('DIR_ciudad')->nullable();
            $table->string('DIR_pais')->nullable();
            $table->integer('DIR_cp')->nullable();
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
        Schema::dropIfExists('direccions');
    }
}
