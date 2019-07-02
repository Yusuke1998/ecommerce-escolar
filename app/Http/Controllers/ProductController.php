<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;

class ProductController extends Controller
{
    public function index()
    {
    	$productos = Product::all();
        $categorias = Category::all();
    	return view('productos.index',compact('productos','categorias'));
    }

    public function producto_ver($id)
    {
    	$categorias = Category::all();
        $producto = Product::where('id',$id)->first();
        return view('inicio.detail_product',compact('producto','categorias'));
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

    public function save_img(Request $request)
    {
        $data = Request()->validate
        ([
            'imagen'       =>  'required',
            'product_id'   =>  'required'
        ]);

        $file = $request->file('imagen');
        $nameImage = 'producto'.time().'.'.$file->getClientOriginalExtension();
        $path = public_path().'\img\productos';
        $file->move($path,$nameImage);

        $producto = Product::find($request->product_id);

        $image = new Image;
        $image->name = $nameImage;
        $image->product()->associate($producto);
        $image->save();

        return back()->with('info','Imagen guardada con exito!');
    }

    public function edit($id)
    {
    	$producto = Product::where('id',$id)->first();
    	return $producto;
    }

    public function show($id)
    {
        $producto = Product::where('id',$id)->first();
        return view('productos.show',compact('producto'));
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
