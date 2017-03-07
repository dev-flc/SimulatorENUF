<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradors', function (Blueprint $table) {
            $table->increments('ADM_id');
            $table->string('ADM_nombre')->nullable();
            $table->string('ADM_apellido_p')->nullable();
            $table->string('ADM_apellido_m')->nullable();
            $table->string('ADM_sexo')->nullable();
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
        Schema::dropIfExists('administradors');
    }
}
