<?php

namespace App\Http\Livewire\Equipments;
use App\Models\Equiment;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{
    public function mount()
    {
        $this->equipments = Equiment::where('aquarium_id',Session::get('aquarium.id'))->get();
    }
    public function render()
    {
        return view('livewire.equipments.index');
    }
}
