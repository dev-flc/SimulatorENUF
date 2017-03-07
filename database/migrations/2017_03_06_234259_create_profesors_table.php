<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesors', function (Blueprint $table) {
            $table->increments('PRO_id');
            $table->string('PRO_nombre')->nullable();
            $table->string('PRO_apellido_p')->nullable();
            $table->string('PRO_apellido_m')->nullable();
            $table->string('PRO_sexo')->nullable();
            $table->integer('USE_id')->unsigned()->nullable();
            $table->integer('DIR_id')->unsigned()->nullable();
            $table->timestamps();
            
            #llave foranea Direccion
            $table->foreign('DIR_id')->references('DIR_id')->on('direccions');
            #llave foranea User
            $table->foreign('USE_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesors');
    }
}
