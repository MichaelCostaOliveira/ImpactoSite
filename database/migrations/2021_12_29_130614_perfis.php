<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Perfis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('perfil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 255)->nullable();
            $table->integer('administrativo')->default(0);
            $table->integer('leads')->default(0);

        });
        Schema::table('users', function (Blueprint $table) {
            $table->integer('perfil_id')->unsigned()->nullable();
            $table->foreign('perfil_id')->references('id')->on('perfil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
