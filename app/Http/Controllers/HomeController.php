<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
    	$productos = Product::all();
        return view('firstpage',compact('productos'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
