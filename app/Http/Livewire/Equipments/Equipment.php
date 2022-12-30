<?php

namespace App\Http\Livewire\Equipments;

use Livewire\Component;

class Equipment extends Component
{
    public $window, $selectedId;
    public function mount()
    {
        $this->window = 'index';
    }
    protected $listeners  =[
        'equipment.index'=>'index',
        'equipment.create'=>'create',
        'equipment.edit'=>'edit',
        'equipment.delete'=>'delete',
        'equipment.show'=>'show'
    ];
    public function index()
    {
        $this->window = 'index';
    }
    public function create()
    {
        $this->window = 'create';
    }
    public function render()
    {
        return view('livewire.equipments.equipment');
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
}
