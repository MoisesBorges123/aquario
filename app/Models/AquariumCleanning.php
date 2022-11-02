<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AquariumCleanning extends Model
{
    use HasFactory;
   protected $table ="aquarium_cleanings";
    public $fillable = [
        'date_to_clean',
        'percentage_water_withdrawn',
        'glass_cleaning',
        'pruning',
        'observations',
        'beginning',
        'end',
        'aquarium_id'

    ];
    public function aquarium(){
        return $this->belongsTo(Aquarium::class);
    }
}
