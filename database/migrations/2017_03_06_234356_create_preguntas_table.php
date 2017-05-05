<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->increments('PRE_id');
            $table->string('PRE_nombre')->nullable();
            $table->integer('PRE_respuestas')->nullable();
            $table->integer('UNI_id')->unsigned()->nullable();
            $table->timestamps();

            #llave foranea examen
            $table->foreign('UNI_id')->references('UNI_id')->on('unidads');

        });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}
