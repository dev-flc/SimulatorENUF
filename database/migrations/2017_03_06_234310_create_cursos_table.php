<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('CUR_id');
            $table->string('CUR_nombre')->nullable();
            $table->integer('CUR_cupos')->nullable();
            $table->date('CUR_fecha')->nullable();
            $table->string('CUR_clave')->nullable();
            $table->string('CUR_foto')->nullable();
            $table->enum('CUR_estatus',['habilitado','deshabilitado'])->default('habilitado');
            $table->integer('PRO_id')->unsigned()->nullable();
            $table->timestamps();
            #llave foranea profesor
            $table->foreign('PRO_id')->references('PRO_id')->on('profesors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
