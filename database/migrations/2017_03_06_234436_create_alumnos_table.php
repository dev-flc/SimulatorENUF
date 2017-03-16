<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('ALU_id');
            $table->string('ALU_nombre')->nullable();
            $table->string('ALU_apellido_p')->nullable();
            $table->string('ALU_apellido_m')->nullable();
            $table->string('ALU_edad')->nullable();
            $table->string('ALU_sexo')->nullable();
            $table->integer('ALU_metricula')->nullable();
            $table->integer('USE_id')->unsigned()->nullable();
            $table->integer('DIR_id')->unsigned()->nullable();
            $table->timestamps();

            #llave foranea users
            $table->foreign('USE_id')->references('id')->on('users');
            #llave foranea direccion
            $table->foreign('DIR_id')->references('DIR_id')->on('direccions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
