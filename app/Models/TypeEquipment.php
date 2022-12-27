<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeEquipment extends Model
{
    use HasFactory;
    protected $table = "type_equipments";
    public $fillale = [
        'name',
        'maintenance_time'
    ];
}
