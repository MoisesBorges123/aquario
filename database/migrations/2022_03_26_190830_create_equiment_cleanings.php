<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquimentCleanings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_cleanings', function (Blueprint $table) {
            $table->id();
            $table->date('date_to_clean');
            $table->integer('percentage_water_withdrawn');            
            $table->boolean('component_exchange');    
            $table->text('observations');
            $table->time('beginning');
            $table->time('end');
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
        Schema::dropIfExists('equipment_cleanings');
    }
}
