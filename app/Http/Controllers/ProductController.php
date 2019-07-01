<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
    	$productos = Product::all();
    	$categorias = Category::all();
    	return view('productos.index',compact('productos','categorias'));
    }

    public function store(Request $request)
    {
    	$data = Request()->validate
    	([
            'name' 			=>	'required',
            'code'			=>	'required|unique:products',
            'category_id'	=>	'required',
            'pricing'		=>	'required',
            'user_id'		=>	'required',
            'description'	=>	'min:5'
        ]);

    	$producto = Product::create($data);

    	return back()->with('info','Producto creado con exito!');
    }

    public function edit($id)
    {
    	$producto = Product::where('id',$id)->first();
    	return $producto;
    }

    public function show($id)
    {
        $img = [];
        $producto = Product::where('id',$id)->first();
        if ($producto->images) {
            $imagenes = $producto->images;
            foreach ($imagenes as $key => $value) {
                array_push($img, $value);
                
            }
        }
        $producto = [$producto,$img];
        // dd($producto);
        return $producto;
    }

    public function update(Request $request)
    {
    	$id = $request->id;
    	$data = Request()->validate
    	([
            'name' 			=>	'required',
            'code'			=>	'required',
            'category_id'	=>	'required',
            'pricing'		=>	'required',
            'user_id'		=>	'required',
            'description'	=>	'min:5'
        ]);
    	$producto = Product::where('id',$id)->first();
    	$producto->update($data);

    	return back()->with('info','Producto actualizado con exito!');
    }

    public function destroy($id)
    {
    	$producto = Product::where('id',$id)->first();
    	$producto->delete();
    	return back()->with('info','Producto eliminado con exito!');
    }
}
