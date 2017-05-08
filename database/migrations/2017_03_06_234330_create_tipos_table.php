<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos', function (Blueprint $table) {
            $table->increments('TIP_id');
            $table->string('TIP_nombre')->nullable();
            $table->timestamps();
        });
        DB::table('tipos')->insert(
            array('TIP_nombre' => 'correcta')
        );
        DB::table('tipos')->insert(
            array('TIP_nombre'=>'incorrecta')
        );
        DB::table('tipos')->insert(
            array('TIP_nombre'=>'prueba')
        );
        DB::table('tipos')->insert(
            array('TIP_nombre'=>'final')
        );
        DB::table('tipos')->insert(
            array('TIP_nombre'=>'global')
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipos');
    }
}
