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
        $productos = Product::latest()->take(4)->get();
        $count = Product::all()->count();

    	$categorias = Product::all();
        
        return view('inicio.firstpage',compact('productos','count','categorias'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
