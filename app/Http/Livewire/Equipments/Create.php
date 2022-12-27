<?php

namespace App\Http\Livewire\Equipments;
use App\Models\TypeEquipment;
use Livewire\Component;

class Create extends Component
{
    public $typeEquipments;
    public $bought,$potency,$type_equipment_id,$name;
    public function mount()
    {
        $this->typeEquipments = TypeEquipment::get();
    }
    protected $rules=[
        'name'=>'required|min:3',
        'bought'=>'required',
        'type_equipment_id'=>'required|number'
    ];
    public function store()
    {
        $this->validate();
    }
    public function render()
    {
        return view('livewire.equipments.create');
    }
}
