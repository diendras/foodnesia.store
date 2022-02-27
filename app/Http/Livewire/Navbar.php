<?php

namespace App\Http\Livewire;


use App\Shopproduct;
use App\Liga;
use App\Shopsale;
use App\Shopsaledetail;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public $qty = 0;

    protected $listeners = [
        'booking' => 'updatebooking'
    ];

    public function updatebooking()
    {
        if(Auth::user()) {
            $Shopsale = Shopsale::where('user_id', Auth::user()->id)->where('status',0)->first();
            if($Shopsale) {
                $this->qty = Shopsaledetail::where('Shopsale_id', $Shopsale->id)->count();
            }else {
                $this->qty = 0;
            }
        }
    }

    public function mount()
    {
        if(Auth::user()) {
            $Shopsale = Shopsale::where('user_id', Auth::user()->id)->where('status',0)->first();
            if($Shopsale) {
                $this->qty = Shopsaledetail::where('Shopsale_id', $Shopsale->id)->count();
            }else {
                $this->qty = 0;
            }
        }
       
    }

    public function render()
    {
        return view('livewire.navbar',[
            'ligas' => Liga::all(),
            'qty_Shopsale' => $this->qty, 
        ]);
    }
}
