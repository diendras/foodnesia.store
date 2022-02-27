<?php

namespace App\Http\Livewire;

use App\Liga;
use App\Product;
use App\Shopproduct;
use App\Shopcat;
use App\Shopsub;
use App\Testimoni;
use App\Newscat;
use App\Newsproduct;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $testimonis = Testimoni::inRandomOrder()->take(8)->get();        
        $shopproducts = Shopproduct::inRandomOrder()->take(8)->get();
        $shopcats = Shopcat::inRandomOrder()->take(8)->get();
        $newsproducts = Newsproduct::inRandomOrder()->take(8)->get();
        $newscats = Newscat::inRandomOrder()->take(8)->get();  

        $shopproducts1 = Shopproduct::where('shopcat_id',1)->inRandomOrder()->take(4)->get();
        $shopproducts2 = Shopproduct::where('shopcat_id',2)->inRandomOrder()->take(4)->get();
        $shopproducts3 = Shopproduct::where('shopcat_id',3)->inRandomOrder()->take(4)->get();
        $shopproducts4 = Shopproduct::where('shopcat_id',4)->inRandomOrder()->take(4)->get();
        $shopproducts5 = Shopproduct::where('shopcat_id',5)->inRandomOrder()->take(4)->get();
        $shopproducts6 = Shopproduct::where('shopcat_id',6)->inRandomOrder()->take(4)->get();
        $shopproducts7 = Shopproduct::where('shopcat_id',7)->inRandomOrder()->take(4)->get();
        $shopproducts8 = Shopproduct::where('shopcat_id',8)->inRandomOrder()->take(4)->get();
        $shopproducts9 = Shopproduct::where('shopcat_id',9)->inRandomOrder()->take(4)->get();
        $shopproducts10 = Shopproduct::where('shopcat_id',10)->inRandomOrder()->take(4)->get();

        $newsproducts1 = Newsproduct::where('newscat_id',10)->inRandomOrder()->take(4)->get();
        $newsproducts2 = Newsproduct::where('newscat_id',6)->inRandomOrder()->take(4)->get();
        $newsproducts3 = Newsproduct::where('newscat_id',5)->inRandomOrder()->take(4)->get();
        $newsproducts3 = Newsproduct::where('newscat_id',5)->inRandomOrder()->take(4)->get();

        return view('livewire.home', [
            'products' => Product::inRandomOrder()->take(4)->get(),
            'shopcats' => Shopcat::inRandomOrder()->take(8)->get(),
            'shopsubs' => Shopsub::inRandomOrder()->take(8)->get(),
            'shopproducts' => Shopproduct::inRandomOrder()->take(8)->get(),
            'ligas' => Liga::all(),
            'testimonis' => Testimoni::inRandomOrder()->take(12)->get(),
            'shopproducts' => Shopproduct::inRandomOrder()->take(12)->get(),
            'newsproducts' => Newsproduct::inRandomOrder()->take(4)->get(),
            'newscats' => Newscat::inRandomOrder()->take(12)->get(),
            
            'newsproducts1' => $newsproducts1,
            'newsproducts2' => $newsproducts2,
            'newsproducts3' => $newsproducts3,
            
            'shopproducts1' => $shopproducts1,
            'shopproducts2' => $shopproducts2,
            'shopproducts3' => $shopproducts3,
            'shopproducts4' => $shopproducts4,
            'shopproducts5' => $shopproducts5,
            'shopproducts6' => $shopproducts6,
            'shopproducts7' => $shopproducts7,
            'shopproducts8' => $shopproducts8,
            'shopproducts9' => $shopproducts9,
            'shopproducts10' => $shopproducts10
        ]);
    }
}
