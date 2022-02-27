<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopsaledetail extends Model
{
    protected $guarded = ['id'];

    public function shopsales()
    {
        return $this->belongsTo(Shopsale::class, 'shopsale_id', 'id');
    }

    public function shopproduct()
    {
        return $this->belongsTo(Shopproduct::class, 'shopproduct_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
