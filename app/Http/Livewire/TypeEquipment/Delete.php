<?php

namespace App\Http\Livewire\TypeEquipment;

use Livewire\Component;
use App\Models\TypeEquipment;
class Delete extends Component
{
    public $typeEquipments,$deletado = 'deletando';
    public function mount($id)
    {
       
        $this->typeEquipments = TypeEquipment::find($id);
    }
    public function render()
    {
        return view('livewire.type-equipment.delete');
    }
    public function destroy()
    {
        try{
            $delete = $this->typeEquipments->delete();
            if($delete){
                $this->deletado = 'deletado';
            }
        }catch(\Exception $e)
        {
            
            $this->emit('swal',$e->getMessage(),'error');
            
        }
          
    }
}
