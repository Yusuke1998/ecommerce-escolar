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
        $productos1 = Product::latest()->take(4)->get();
        $productos2 = Product::latest()->take(4)->get();
        $productos3 = Product::latest()->take(4)->get();
        $productos4 = Product::latest()->take(4)->get();
        $count = Product::all()->count();

    	$categorias = Product::all();
        
        return view('inicio.firstpage',compact('productos1','productos2','productos3','productos4','count','categorias'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
