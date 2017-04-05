<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidads', function (Blueprint $table) {
            $table->increments('UNI_id');
            $table->string('UNI_nombre')->nullable();
            $table->string('UNI_material_apoyo')->nullable();
            $table->date('UNI_fecha_final')->nullable();
            $table->string('UNI_tiempo')->nullable();
            $table->string('UNI_calificacion')->nullable();
            $table->string('UNI_numero_pregunta')->nullable();
            $table->integer('CUR_id')->unsigned()->nullable();
            $table->timestamps();

            #llave foranea curso
            $table->foreign('CUR_id')->references('CUR_id')->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidads');
    }
}
