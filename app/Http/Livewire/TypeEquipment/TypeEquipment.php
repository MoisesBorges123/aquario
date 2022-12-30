<?php

namespace App\Http\Livewire\TypeEquipment;

use Livewire\Component;

class TypeEquipment extends Component
{
    public $selectedId, $window='list';
    public $listeners = [
        'deleteTypeEquipment'=>'delete',
        'editTypeEquipment'=>'edit',
        'newTypeEquipment'=>'create',
        'goToIndexTypeEquipment'=>'list'
    ];
    public function mount()
    {
        
    }
    public function render()
    {
        return view('livewire.type-equipment.type-equipment');
    }
    public function create()
    {
        $this->window  = 'create';
    }
    public function list()
    {
        $this->window  = 'list';
    }
    public function edit($id)
    {
        $this->selectedId=$id;
        $this->window  = 'edit';
    }
    public function delete($id)
    {
        $this->selectedId=$id;
        $this->window = 'delete';
    }

}
