<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nws', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagem');
            $table->string('nome');
            $table->string('tipo');
            $table->string('especialidade');
            $table->double('vida', 10, 2);
            $table->double('defesa', 10, 2);
            $table->double('dano', 10, 2);
            $table->double('velocidade_ataque', 10, 2);
            $table->double('velocidade_movi', 10, 2);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nws');
    }
}
