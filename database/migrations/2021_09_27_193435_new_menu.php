<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('rota')->nullable();
            $table->boolean('status')->default(1);
            $table->string('icone_menu')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::table('menus', function (Blueprint $table) {
            $table->integer('menu_id')->unsigned()->nullable()->after('id');
            $table->foreign('menu_id')->references('id')->on('menus');
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
