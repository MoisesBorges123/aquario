<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeEquipmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_equipments')->insert( 
            [
            'name' => 'Lâmpada',
            'maintenance_time' => 30, //Tempo determidado em dias           
            ],
            [
            'name' => 'Filtro Principal',
            'maintenance_time' => 90, //Tempo determidado em dias           
            ],
            [
            'name' => 'Filtro Auxiliar',
            'maintenance_time' => 7, //Tempo determidado em dias           
            ],
            [
            'name' => 'Bomba CO²',
            'maintenance_time' => 365, //Tempo determidado em dias           
            ],
            [
            'name' => 'Bomba O²',
            'maintenance_time' => 365, //Tempo determidado em dias           
            ],
            [
            'name' => 'Termostato',
            'maintenance_time' => 365, //Tempo determidado em dias           
            ],
            
            
        );

    }
}
