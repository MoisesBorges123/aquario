<?php

namespace App\Http\Livewire\EquipmentsTimers;

use App\Helpers\GlobalConfig;
use Livewire\Component;
use App\Models\EquipmentsTime;
class Index extends Component
{
    public $equipmentsTime, $registerSelected;
    public $listeners=[
        'EquipmentTimer.destroy'=>'destroy'
    ];
    public function create()
    {
        $this->emit("equipmentTime.create");
        
    }
    public function info($id)
    {
        $item =EquipmentsTime::find($id);
        if($item->manual)
        {
            $manual = '<span class="fa fa-circle text-success"></span> On';
        }else
        {
            $manual = '<span class="fa fa-circle text-default"></span> Off';
        }
        if($item->_24hs)
        {
            $_24hs = '<span class="fa fa-circle text-success"></span> On';
        }else
        {
            $_24hs = '<span class="fa fa-circle text-default"></span> Off';
        }

        $this->emit('swal', 
        '<div class="row">'.
            '<div class="col-12">'.
                '<span class="title">Manual: </span>'.
                '<span>'.$manual.'</span>'.
            '</div>'.
            '<div class="col-12">'.
                '<span class="title">24Hs: </span>'.
                '<span>'.$_24hs.'</span>'.
            '</div>'.
            '<div class="col-12">'.
                '<span class="title">Liga: </span>'.
                '<span>'.str_pad($item->h_in,2,'0',STR_PAD_LEFT).':'.str_pad($item->m_in,2,'0',STR_PAD_LEFT).'</span>'.
            '</div>'.
            '<div class="col-12">'.
                '<span class="title">Desliga: </span>'.
                '<span>'.str_pad($item->h_out,2,'0',STR_PAD_LEFT).':'.str_pad($item->m_out,2,'0',STR_PAD_LEFT).'</span>'.
            '</div>'.            
            '<div class="col-12">'.
                '<span class="title">Dias do mês: </span>'.
                '<span>'.($item->day_month ?? '-') .'</span>'.
            '</div>'.            
            '<div class="col-12">'.
                '<span class="title">Dias da Semana: </span>'.
                '<small>'.GlobalConfig::nomeDiasSemana($item->day_sem).'</small>'.
            '</div>'.                        
        '</div>'
        ,
        'info');
    }   
    public function destroy($id)
    {
      try{
        EquipmentsTime::find($id)->delete();
        $this->emit('toast','Registro deletado','success');
      }catch(\Exception $e)
      {
        $this->emit('toast',$e->getMessage(),'error');
      }
            EquipmentsTime::find($id)->delete();
            $this->emit('toast','Registro deletado','success');
            
       
        
    }
    public function mount($id)
    {        
        $this->equipmentsTime =EquipmentsTime::where('equipment_id',$id)->get();
    }
    public function render()
    {
        return view('livewire.equipments-timers.index');
    }
}
