<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Aquarium as LivewireAquarium;
use Livewire\Component;
use App\Models\Aquarium;
use App\Models\AquariumCleanning;
use App\Models\Equiment;
use App\Models\EquimentCleanning;

class AquarimDashboard extends Component
{
    public $aquarium, $aquariumCleannings, $equipments;

    public function mount($id){
        $this->aquarium = Aquarium::where('id',$id)->first();
        $this->aquariumCleannings = AquariumCleanning::get();
        $this->equipments = Equiment::get();
    }

    public function render()
    {
        
        return view('livewire.aquarioDashboard.aquarim-dashboard');
    }
}
