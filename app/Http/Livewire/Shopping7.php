<?php

namespace App\Http\Livewire;

use App\Shopsale;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Shopping7 extends Component
{
    public $shopsales;

    public function render()
    {
        if(Auth::user())
        {
            $this->shopsales = Shopsale::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();
        }
        
        return view('livewire.shopping7');
    }
}
