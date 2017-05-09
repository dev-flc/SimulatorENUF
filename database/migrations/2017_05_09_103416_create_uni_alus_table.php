<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniAlusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uni_alus', function (Blueprint $table) {
            $table->increments('UNAL_id');
            $table->integer('UNI_id')->unsigned()->nullable();;
            $table->integer('ALU_id')->unsigned()->nullable();;
            $table->integer('UNAL_calificacion')->nullable();;
            $table->integer('UNAL_intentos')->nullable();;
            $table->timestamps();
            $table->foreign('UNI_id')->references('UNI_id')->on('unidads');
            $table->foreign('ALU_id')->references('ALU_id')->on('alumnos');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uni_alus');
    }
}
