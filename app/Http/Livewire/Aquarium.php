<?php

namespace App\Http\Livewire;
use App\Models\Aquarium as AquariumTB;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Aquarium extends Component
{
    public $aquariums, $mode='list';
    public $name, $literage, $planted, $fresh_water;
   
    protected $rules =[
        'name'=> 'required|min:5',
        'literage'=> 'required|numeric|min:5',
        'planted'=> 'boolean',
        'fresh_water'=>'boolean',
        
    ];
    public function render()
    {
        
        $this->aquariums = AquariumTB::get();
        return view('livewire.tanks.aquarium');
    }
    public function store(){
        $this->validate();
        $store= AquariumTB::create([
            'name'=>$this->name,
            'literage'=>$this->literage,
            'planted'=>$this->planted,
            'fresh_water'=>$this->fresh_water,
            'user_id'=>Auth::user()->id,            
        ]);
        if($store){
            session()->flash('message-success', 'Aquário cadastrado com sucesso. ;)');
            $this->resetInput();
        }else{
            session()->flash('message-fail', 'Algo deu errado contacte o desenvolvedor. :/ ');

        }
    }
    public function setMode($text)
    {
        $this->mode = $text;
        
    }
    public function resetInput(){
        $this->name=null;
        $this->literage=null;
        $this->planted = null;
        $this->fresh_water = null;
       
    }
}
