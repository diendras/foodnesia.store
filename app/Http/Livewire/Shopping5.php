<?php

namespace App\Http\Livewire;

use App\Shopsale;
use App\Shopsaledetail;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Shopping5 extends Component
{
    protected $shopsale;
    protected $shopsaledetails = [];

    public function destroy($id)
    {
       $shopsaledetail = Shopsaledetail::find($id);
       if(!empty($shopsaledetail)) {
           
           $shopsale = Shopsale::where('id', $shopsaledetail->shopsale_id)->first();
           $qty2 = Shopsaledetail::where('shopsale_id', $shopsale->id)->count();
           if($qty2 == 1) 
           {
               $shopsale->delete();
           }else {
               $shopsale->total = $shopsale->total-$shopsaledetail->total;
               $shopsale->update();
           }

           $shopsaledetail->delete();
       }

       $this->emit('booking');

       session()->flash('message', 'shopsale deleted');
    }

    public function render()
    {
        if(Auth::user()) {
            $this->shopsale = Shopsale::where('user_id', Auth::user()->id)->where('status',0)->first();
            if($this->shopsale)
            {
                $this->shopsaledetails = Shopsaledetail::where('shopsale_id', $this->shopsale->id)->get();
            }
        }

        return view('livewire.shopping5',[
            'shopsale' => $this->shopsale,
            'shopsaledetails' => $this->shopsaledetails
        ]);
    }
}

