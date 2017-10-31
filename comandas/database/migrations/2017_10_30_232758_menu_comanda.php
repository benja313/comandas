<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MenuComanda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('menu_comnada', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comentario',70);
            $table->integer('id_menu')->unsigned();
            $table->foreign('id_menu')->references('id')->on('menu');
            $table->integer('id_agregado')->unsigned();
            $table->foreign('id_agregado')->references('id')->on('agregado');
            $table->integer('id_comanda')->unsigned();
            $table->foreign('id_comanda')->references('id')->on('comanda');

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
