<?php

namespace App\Http\Controllers;

use App\ShoppingCart;
use App\inShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function agregar(Request $request)
    {
        dd($request->all());
        $carrito = ShoppingCart::create();
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function destroy(ShoppingCart $shoppingCart)
    {
        //
    }
}
