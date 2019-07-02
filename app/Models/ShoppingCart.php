<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = [
    	'status'
    ];

    public function inshoppingcarts()
    {
    	return $this->hasMany(inShoppingCart::class);
    }

    public function order(){
        return $this->hasOne(Order::class);
    }
}
