<?php

namespace App\Http\Livewire;
use App\Shopproduct;
use App\Shopcat;
use App\Shopsub;
use App\Testimoni;
use App\Newscat;
use App\Newsproduct;
use App\Shopsale;
use App\Shopsaledetail;


use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Shopping4 extends Component
{
    public $shopproduct,$user, $code,  $image, $hpp, $price, $pricedisc, $grandprice, $uniqcode,$qty, $nomor, $grandtotal, $payment, $credit, $paymentstatus, $imagetransfer, $statement, $status, $reason, $description, $data_id;


    public function mount($id)
    {
        $Shopping4 = Shopproduct::find($id);

        if($Shopping4) {
            $this->shopproduct = $Shopping4;
        }
    }

    public function Booking()
    {
        $this->validate([
            'qty' => 'required',
        ]);

        //Validasi Jika Belum Login
        if(!Auth::user()) {
            return redirect()->route('login');
        }

        //Menghitung Total Harga
        if(!empty($this->name)) {
            $total = $this->qty*$this->shopproduct->price-$this->shopproduct->pricedisc;
        }else {
            $total = $this->qty*$this->shopproduct->price;
        }

        //Ngecek Apakah user punya data Shopsale utama yg status nya 0
        $Shopsale = Shopsale::where('user_id', Auth::user()->id)->where('status',0)->first();
        //Menyimpan / Update Data Shopsale Utama
        if(empty($Shopsale))
        {
            Shopsale::create([
                'user_id' => Auth::user()->id,
                'status' => 0,
                'grandprice' => $total,
                'uniqcode' => mt_rand(100, 999),
            ]);

            $Shopsale = Shopsale::where('user_id', Auth::user()->id)->where('status',0)->first();
            $Shopsale->code = 'SL-'.$Shopsale->id;
            $Shopsale->update();

        }else {
            $Shopsale->grandprice = $Shopsale->grandprice+$total;
            $Shopsale->update();
        }

        //Meyimpanan Shopsale Detail
        Shopsaledetail::create([
            'shopsale_id' => $Shopsale->id,
            'shopproduct_id' => $this->shopproduct->id,
            'name' => $this->shopproduct->name,
            'price' => $this->shopproduct->price,
            'disc' => $this->shopproduct->pricedisc,
            'qty' => $this->qty,
            'total'=> $total,
            'reason'=> $this->reason,
            'description'=> $this->description
        ]);

        $this->emit('booking');

        session()->flash('message', 'Success your booking ');

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.shopping4');
    }
}

