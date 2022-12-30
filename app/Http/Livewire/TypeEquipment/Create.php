<?php

namespace App\Http\Livewire\TypeEquipment;
use App\Models\TypeEquipment;
use Livewire\Component;

class Create extends Component
{
    public $name, $maintenance_time;
    public $rules = [
        'name'=>'required',
        'maintenance_time'=>'required'
    ];
    public function render()
    {
        return view('livewire.type-equipment.create');
    }
    public function store()
    {
        $this->validate();
        try{
            TypeEquipment::create([
                'name'=>$this->name,
                'maintenance_time'=>$this->maintenance_time
            ]);
            $this->emit('goToIndexTypeEquipment');
            $this->emit('toast','Salvo com sucesso!!','success');
            $this->reset();
        }catch(\Exception $e)
        {
            $this->emit('swal',$e->getMessage(),'error');
        }

    }
}
