<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopproduct extends Model
{
    protected $guarded = ['id'];

    public function shopcat()
    {
        return $this->belongsTo(Shopcat::class, 'shopcat_id', 'id');
    }

    public function shopsub()
    {
        return $this->belongsTo(Shopsub::class, 'shopsub_id', 'id');
    }

    public function shopsaledetails()
    {
        return $this->hasMany(Shopsaledetail::class, 'shopproduct_id', 'id');
    }

}
