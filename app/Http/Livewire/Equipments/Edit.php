<?php

namespace App\Http\Livewire\Equipments;
use App\Models\TypeEquipment;
use App\Models\Equiment;
use Livewire\Component;

class Edit extends Component
{
    public $typeEquipments, $equipment;
    public $bought,$potency,$type_equipment_id,$name,$price;
    public function mount($id)
    {
        $this->equipment = Equiment::find($id);
        $this->typeEquipments = TypeEquipment::get();
        $this->name = $this->equipment->name;
        $this->bought = $this->equipment->bought;
        $this->potency = $this->equipment->potency;
        $this->type_equipment_id = $this->equipment->type_equipment_id;
        $this->price = $this->equipment->value;
    }
    protected $rules=[
        'name'=>'required|min:3',
        'bought'=>'required',
        'type_equipment_id'=>'required|numeric',
        'price'=>'required',
        
    ];
    public function render()
    {
        return view('livewire.equipments.edit');
    }
    public function update()
    {
        $this->validate();
        try{
            $this->equipment->update([
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
}
