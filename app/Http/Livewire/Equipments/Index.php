<?php

namespace App\Http\Livewire\Equipments;
use App\Models\Equiment;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{
    public $equipments;
    public function mount()
    {      
        date_default_timezone_set('America/Sao_Paulo'); 
        $this->equipments = Equiment::where('aquarium_id',session::get('aquarium.id'))->get();
        
        
    }
    public function render()
    {
        return view('livewire.equipments.index');
    }
}

