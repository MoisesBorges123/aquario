<?php

namespace App\Http\Livewire\Equipments;

use Livewire\Component;

class Equipment extends Component
{
    public $window;
    public function mount()
    {
        $this->window = 'index';
    }
    protected $listeners  =[
        'equipment.index'=>'index',
        'equipment.create'=>'create'
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
}
