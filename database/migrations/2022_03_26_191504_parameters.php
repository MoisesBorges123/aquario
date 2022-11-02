<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Parameters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->id();            
            /*
            $table->time("light_on"); // Ligar Luzes
            $table->time('light_off'); //Desligar luzes
            $table->time('alimentation_1'); //Primeira alimentação
            $table->time('alimentation_2'); //Segunda alimentação
            $table->time('alimentation_3'); //Terceira alimentação
            $table->time('alimentation_4'); //Quarta alimentação
            $table->integer('food_preparation'); //Tempo em minutos para preparar os peixes para alimentar
            $table->integer('port_filter1'); //Porta no arduino do filtro 1
            */
            $table->string('name');
            $table->text('description');
            $table->string('value');            
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
        Schema::dropIfExists('parameters');
    }
}
