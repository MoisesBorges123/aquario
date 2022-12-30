<?php

namespace App\Http\Livewire\TypeEquipment;

use Livewire\Component;
use App\Models\TypeEquipment;

class Index extends Component
{
    public $typeEquipments;
    public function mount()
    {
        $this->typeEquipments = TypeEquipment::get();
    }
    public function render()
    {
        return view('livewire.type-equipment.index');
    }
}
