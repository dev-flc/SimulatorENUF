<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('RES_id');
            $table->string('RES_nombre')->nullable();
            $table->integer('PRE_id')->unsigned()->nullable();
            $table->integer('TIP_id')->unsigned()->nullable();
            $table->timestamps();
            
            #llave foranea pregunta
            $table->foreign('PRE_id')->references('PRE_id')->on('preguntas');
            #llave foranea tipo
            $table->foreign('TIP_id')->references('TIP_id')->on('tipos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
