<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentsTime extends Model
{
    use HasFactory;
    protected $table ='equipments_timers';
    public $fillable =[
                        'h_in',
                        'm_in',
                        'h_out',
                        'm_out',
                        'day_sem',
                        'day_mouth',
                        'manual',
                        '_24hs',
                        'equipment_id'
                        ];
}
