<?php

namespace App\Http\Livewire\TypeEquipment;

use Livewire\Component;
use App\Models\TypeEquipment;
use TypeError;

class Edit extends Component
{
    public $name, $maintenance_time,$typeEquipments;
    public $rules = [
        'name'=>'required',
        'maintenance_time'=>'required'
    ];
    public function mount($id)
    {
        
        $this->typeEquipments = TypeEquipment::find($id);
        $this->name = $this->typeEquipments->name;
        $this->maintenance_time = $this->typeEquipments->maintenance_time;
    }
    public function render()
    {
        return view('livewire.type-equipment.edit');
    }
    public function update()
    {
        $this->validate();
        try{
            $this->typeEquipments->update([
                'name'=>$this->name,
                'maintenance_time'=>$this->maintenance_time
            ]);
            $this->emit('toast','Salvo com sucesso!!','success');
            $this->emit('goToIndexTypeEquipment');
        }catch(\Exception $e)
        {
            $this->emit('swal',$e->getMessage(),'danger');
        }

    }
}
