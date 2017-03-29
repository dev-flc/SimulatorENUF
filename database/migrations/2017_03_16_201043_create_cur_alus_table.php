<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurAlusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cur_alus', function (Blueprint $table) {
            $table->increments('CUAL_id');
            $table->enum('CUAL_estatus',['aprobado','pendiente','denegado'])->default('pendiente');
            $table->integer('CUR_id')->unsigned()->nullable();
            $table->integer('ALU_id')->unsigned()->nullable();
            $table->timestamps();
            #llave foranea curso
            $table->foreign('CUR_id')->references('CUR_id')->on('cursos');
            #llave foranea alumno
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
        Schema::dropIfExists('cur_alus');
    }
}
