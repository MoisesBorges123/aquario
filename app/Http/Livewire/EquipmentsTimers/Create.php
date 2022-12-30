<?php

namespace App\Http\Livewire\EquipmentsTimers;
use App\Models\EquipmentsTime;
use Livewire\Component;

class Create extends Component
{
    public $equipment_id, $_24h,$manual, $power_on, $power_off, $day_sem=[], $day_month;    
    
    public function store()
    {
       
        try
        {
            $this->power_on = explode(':',$this->power_on);
            $this->power_off = explode(':',$this->power_off);
            
            EquipmentsTime::create([
                'equipment_id'=>$this->equipment_id,
                'h_in'=>strval($this->power_on[0]),
                'm_in'=>strval($this->power_on[1]),
                'h_out'=>strval($this->power_off[0]),
                'm_out'=>strval($this->power_off[1]),
                'day_sem'=>implode(',',$this->day_sem),
                'day_month'=>$this->day_month,
                'manual'=>$this->manual ?? false,
                '_24hs'=>$this->_24h ?? false
            ]);
            $this->emit('toast','Horário adicionado com sucesso','success');
        }catch(\Exception $e) 
        {
            $this->emit('swal',$e->getMessage(),'error');
        }
        
    }
    
    public function mount($id)
    {
        $this->equipment_id = $id;
    }
    public function render()
    {
        return view('livewire.equipments-timers.create');
    }
}


/*
@php
                        $dias = explode(',',$item->day_sem);
                        foreach($dias as $dia){
                            echo"<smal>".App\Helpers\GlobalConfig::$diasSemana[$dia]."</smal><br>";
                        }
                    @endphp
*/