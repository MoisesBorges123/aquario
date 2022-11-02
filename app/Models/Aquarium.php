<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aquarium extends Model
{
    use HasFactory;
    protected $table='aquariums';
    public $fillable = [
        'name',
        'literage',
        'planted',
        'fresh_water',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
