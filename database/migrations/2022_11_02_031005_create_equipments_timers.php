<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentsTimers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments_timers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_id');
            $table->integer('h_in');
            $table->integer('m_in');
            $table->integer('h_out');
            $table->integer('m_out');
            $table->integer('day_sem')->nullable();
            $table->integer('day_month')->nullable();
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
        Schema::dropIfExists('equipments_timers');
    }
}
