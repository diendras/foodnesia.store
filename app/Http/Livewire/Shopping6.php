<?php

namespace App\Http\Livewire;

use App\Shopsale;
use App\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Shopping6 extends Component
{
    public $grandprice, $hp, $address;

    public function mount()
    {
        if(!Auth::user()) {
            return redirect()->route('login');
        }

        $this->hp = Auth::user()->hp;
        $this->address = Auth::user()->address;

        $Shopsale = Shopsale::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if(!empty($Shopsale))
        {
            $this->grandprice = $Shopsale->grandprice+$Shopsale->uniqcode;
        }else {
            return redirect()->route('home');
        }
    }

    public function Checkout()
    {
        $this->validate([
            'hp' => 'required',
            'address' => 'required'
        ]);

        //Simpan hp address ke data user
        $user = User::where('id', Auth::user()->id)->first();
        $user->hp = $this->hp;
        $user->address = $this->address;
        $user->update();


        //update data Shopsale
        $Shopsale = Shopsale::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $Shopsale->status = 1;
        $Shopsale->update();

        $this->emit('booking');

        session()->flash('message', "Success Booking");

        return redirect()->route('shopping7');
    }

    public function render()
    {
        return view('livewire.shopping6');
    }
}
