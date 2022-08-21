<?php

namespace App\Http\Livewire;

use App\Models\Posts;
use Livewire\Component;

class LandinCounter extends Component
{   
    
    public $count= 0;

    protected $listeners = ['postAdded'=>'$refresh'];
    
    public function render()
    {

        $this->count = count(Posts::get());
        return view('livewire.landin-counter');
    }



 

    public function postAdded()
    {
        
    }

}
