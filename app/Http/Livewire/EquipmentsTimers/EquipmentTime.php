<?php

namespace App\Http\Livewire\EquipmentsTimers;

use Livewire\Component;

class EquipmentTime extends Component
{
    public $window, $selectedId,$universalID;
    public $listeners = [
        'equipmentTime.index'=>'index',
        'equipmentTime.create'=>'create',
        'equipmentTime.edit'=>'edit',
        'equipmentTime.delete'=>'delete',
        'equipmentTime.show'=>'show'
    ];
    public function index()
    {
       
        $this->window = 'index';
    }
    public function create()
    {
        $this->window = 'create';
    }
    public function edit($id)
    {
        
        $this->selectedId = $id;
        $this->window = 'edit';
    }
    public function delete($id)
    {
        $this->selectedId = $id;
        $this->window = 'delete';
    }
    public function show($id)
    {
        $this->selectedId = $id;
        $this->window = 'show';
    }
    public function mount($id)
    {
        $this->universalID = $id;
        $this->window='index';
    }
    
    public function render()
    {
        return view('livewire.equipments-timers.equipment-time');
    }
}
