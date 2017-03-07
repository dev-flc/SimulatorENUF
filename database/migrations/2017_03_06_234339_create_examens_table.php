<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->increments('EXA_id');
            $table->string('EXA_nombre')->nullable();
            $table->date('EXA_fecha')->nullable();
            $table->time('EXA_hora')->nullable();
            $table->decimal('EXA_calificacion',2,2)->nullable();
            $table->time('EXA_tiempo')->nullable();
            $table->integer('EXA_intento')->nullable();
            $table->integer('UNI_id')->unsigned()->nullable();
            $table->integer('TIP_id')->unsigned()->nullable();
            $table->timestamps();
            
            #llave foranea profesor
            $table->foreign('UNI_id')->references('UNI_id')->on('unidads');
            #llave foranea profesor
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
        Schema::dropIfExists('examens');
    }
}
