<?php

namespace App\Http\Livewire\Cleanings;

use Livewire\Component;

use function GuzzleHttp\Promise\queue;

class Cleaning extends Component
{
    public $selectedId, $window='index';
    public $listeners = [
        'cleaning.delete'=>'delete',
        'cleaning.edit'=>'edit',
        'cleaning.create'=>'create',
        'cleaning.index'=>'index',
        'cleaning.show'=>'show'
    ];
    public function index()
    {
        $this->window = 'index';
    }
    public function edit($id)
    {
        $this->window = 'edit';
    }
    public function create()
    {
        $this->window = 'create';
    }
    public function delete($id)
    {
        $this->window = 'delete';
    }
    public function show($id)
    {
        $this->window = 'show';
    }
    public function render()
    {
        return view('livewire.cleanings.cleaning');
    }
}
