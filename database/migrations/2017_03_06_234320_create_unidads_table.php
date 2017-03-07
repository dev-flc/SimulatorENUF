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
            $table->date('UNI_fecha_final')->nullable();
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
