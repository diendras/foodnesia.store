<?php

namespace App\Http\Livewire;
use App\Shopsub;
use App\Shopcat;
use App\Shopproduct;
use App\Testimoni;
use App\Newscat;
use App\Newsproduct;
use Livewire\Component;
use Livewire\WithPagination;

class Shopping1 extends Component
{
    use WithPagination;

    public $search;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $shopcats = Shopcat::inRandomOrder()->take(18)->get();
        $shopsubs = Shopsub::inRandomOrder()->take(18)->get();
        $shopproducts = Shopproduct::inRandomOrder()->take(8)->get();
        $shopproducts1 = Shopproduct::where('shopcat_id',1)->inRandomOrder()->take(12)->get();
        $shopproducts2 = Shopproduct::where('shopcat_id',2)->inRandomOrder()->take(12)->get();
        $shopproducts3 = Shopproduct::where('shopcat_id',3)->inRandomOrder()->take(12)->get();
        $shopproducts4 = Shopproduct::where('shopcat_id',4)->inRandomOrder()->take(12)->get();
        $shopproducts5 = Shopproduct::where('shopcat_id',5)->inRandomOrder()->take(12)->get();
        $shopproducts6 = Shopproduct::where('shopcat_id',6)->inRandomOrder()->take(12)->get();
        $shopproducts7 = Shopproduct::where('shopcat_id',7)->inRandomOrder()->take(12)->get();
        $shopproducts8 = Shopproduct::where('shopcat_id',8)->inRandomOrder()->take(12)->get();
        $shopproducts9 = Shopproduct::where('shopcat_id',9)->inRandomOrder()->take(12)->get();
        $shopproducts10 = Shopproduct::where('shopcat_id',10)->inRandomOrder()->take(12)->get();
        $shopproducts11 = Shopproduct::where('shopcat_id',11)->inRandomOrder()->take(12)->get();
        $shopproducts12 = Shopproduct::where('shopcat_id',12)->inRandomOrder()->take(12)->get();
        $newscats = Newscat::inRandomOrder()->take(18)->get();  
        $newsproducts = Newsproduct::inRandomOrder()->take(12)->get();   
        $testimonis = Testimoni::inRandomOrder()->take(12)->get();

        if($this->search) {
            $shopproducts = Shopproduct::where('name', 'like', '%'.$this->search.'%')->paginate(8);
        }else {
            $shopproducts = Shopproduct::paginate(8);
        }
        
        return view('livewire.shopping1', [
            'shopcats' => $shopcats,
            'shopsubs' => $shopsubs,
            'shopproducts' => $shopproducts,
            'shopproducts1' => $shopproducts1,
            'shopproducts2' => $shopproducts2,
            'shopproducts3' => $shopproducts3,
            'shopproducts4' => $shopproducts4,
            'shopproducts5' => $shopproducts5,
            'shopproducts6' => $shopproducts6,
            'shopproducts7' => $shopproducts7,
            'shopproducts8' => $shopproducts8,
            'shopproducts9' => $shopproducts9,
            'shopproducts10' => $shopproducts10,
            'shopproducts11' => $shopproducts11,
            'shopproducts12' => $shopproducts12,
            'testimonis' => $testimonis,
            'newscats' => $newscats,
            'newsproducts' => $newsproducts,
            'title' => 'GoShop',
            'title1' => 'GoShop',
            'title2' => 'Waserda'
        ]);
    }
}

