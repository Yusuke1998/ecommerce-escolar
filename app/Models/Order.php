<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'postal_code');
        'city',
        'state',
        'country',
        'status'),
        'guide_number',
        'total',
        'user_id',
        'shopping_cart_id'
    ];

    public function shoppingcart()
    {
    	return $this->belongsTo(ShoppingCart::class);
    }
}
