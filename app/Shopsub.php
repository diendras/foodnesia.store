<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopsub extends Model
{
    protected $guarded = ['id'];

    public function shopcat()
    {
        return $this->belongsTo(Shopcat::class, 'shopcat_id', 'id');
    }

    public function shopproducts()
    {
        return $this->hasMany(Shopproduct::class, 'shopsub_id', 'id');
    }

    public function shopcats()
    {
        return $this->hasMany(Shopcat::class, 'shopsub_id', 'id');
    }
}
