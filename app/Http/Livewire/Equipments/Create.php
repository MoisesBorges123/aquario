<?php

namespace App\Http\Livewire\Equipments;
use App\Models\TypeEquipment;
use App\Models\Equiment;
use Livewire\Component;

class Create extends Component
{
    public $typeEquipments;
    public $bought,$potency,$type_equipment_id,$name,$price;
    public function mount()
    {
        $this->typeEquipments = TypeEquipment::get();
    }
    protected $rules=[
        'name'=>'required|min:3',
        'bought'=>'required',
        'type_equipment_id'=>'required|numeric',
        'price'=>'required',
        
    ];
    public function store()
    {
        $this->validate();
        try{
            Equiment::create([
                'name'=>$this->name,
                'type_equipment_id'=>$this->type_equipment_id,
                'aquarium_id'=>session('aquarium.id'),
                'potency'=>$this->potency,
                'bought'=>$this->bought,
                'value'=>$this->price
            ]);
            $this->emit('toast','Salvo com sucesso','success');
            $this->emit('equipment.index');
        }catch(\Exception $e)
        {
            $this->emit('swal',$e->getMessage(),'error');
        }
    }
    public function render()
    {
        return view('livewire.equipments.create');
    }
}
