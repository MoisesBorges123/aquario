<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterEquipmentsTimers1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipments_timers', function (Blueprint $table) {
            $table->string('day_sem',100)->change();
            $table->string('day_month',100)->change();
            $table->boolean('manual')->nullable();
            $table->boolean('_24hs')->nullable();
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
