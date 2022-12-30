<?php

namespace App\Http\Livewire\Cleanings;

use Livewire\Component;
use App\Models\AquariumCleanning;

class Index extends Component
{
    public $aquariumCleannings;
    
    public function mount()
    {
        $this->aquariumCleannings = AquariumCleanning::get();
    }
    public function render()
    {
        return view('livewire.cleanings.index');
    }
}
