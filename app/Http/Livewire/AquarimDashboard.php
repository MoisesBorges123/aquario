<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Aquarium as LivewireAquarium;
use Livewire\Component;
use App\Models\Aquarium;
use App\Models\AquariumCleanning;

use App\Models\EquimentCleanning;
use Illuminate\Support\Facades\Session;

class AquarimDashboard extends Component
{
    public $aquarium, $aquariumCleannings, $equipments;

    public function mount($id){
        $this->aquarium = Aquarium::where('id',$id)->first();
        if(!empty($this->aquarium))
        {
            Session::forget('aquarium');
            Session::put('aquarium',[
                                        'id'=>$id,
                                        'name'=>$this->aquarium->name,
                                        'literage'=>$this->aquarium->literage,
                                        'planted'=>$this->aquarium->planted,
                                        'fresh_water'=>$this->aquarium->fresh_water,

                                    ]);

        }
        $this->aquariumCleannings = AquariumCleanning::get();
        
    }

    public function render()
    {
        
        return view('livewire.aquarioDashboard.aquarim-dashboard');
    }
}
