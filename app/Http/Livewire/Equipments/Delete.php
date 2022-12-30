<?php

namespace App\Http\Livewire\Equipments;

use Livewire\Component;
use App\Models\Equiment;
class Delete extends Component
{
    public $equipment,$deletado = 'deletando';
    public function mount($id)
    {   
        $this->equipment= Equiment::find($id);
    }       
    public function render()
    {
        return view('livewire.equipments.delete');
    }
    public function destroy()
    {
        try{
            $delete = $this->equipment->delete();
            if($delete){
                $this->deletado = 'deletado';
            }
        }catch(\Exception $e)
        {
            
            $this->emit('swal',$e->getMessage(),'error');
            
        }
          
    }
}
