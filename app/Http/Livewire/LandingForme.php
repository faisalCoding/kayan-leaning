<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Posts;

class LandingForme extends Component
{
    public function render()
    {
        return view('livewire.landing-forme');
    }

    public $name   = "هلا";
    public $email  ;
    public $address;
    public $phone  ;

    public function send(){

        Posts::create([
            "name"    => $this->name   ,
            "email"   => $this->email  ,
            "address" => $this->address,
            "phone"   => $this->phone  ,
        ]);
        $this->emit("postAdded");
    }


}
