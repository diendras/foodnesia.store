<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopsale extends Model
{
   	protected $guarded = ['id'];

    public function shopsaledetails()
    {
        return $this->hasMany(Shopsaledetail::class, 'shopsale_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
