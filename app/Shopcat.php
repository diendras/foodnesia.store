<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopcat extends Model
{
	protected $guarded = ['id'];

    public function shopproducts()
    {
        return $this->hasMany(Shopproduct::class, 'shopcat_id', 'id');
    }
}
