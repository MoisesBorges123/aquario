<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equiment extends Model
{
    use HasFactory;
    protected $table = 'equipments';
    public $fillable = [
        'name',
        'type_equipment_id',
        'aquarim_id',
        'potency',
        'bought',
        'value'
    ];
    public function aquarium(){
        return $this->belongsTo(Aquarium::class);
    }
    public function type_equipemnt(){
        return $this->belongsTo(TypeEquipment::class,'type_equipment_id','id');
    }
}
