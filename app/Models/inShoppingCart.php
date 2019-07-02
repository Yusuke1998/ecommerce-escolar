<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inShoppingCart extends Model
{
    protected $fillable = [
    	'shopping_cart_id','product_id'
    ];

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function shoppingcart()
    {
    	return $this->belongsTo(ShoppingCart::class);
    }
}
