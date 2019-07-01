<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
    	$categorias = Category::all();
    	return view('categorias.index',compact('categorias'));
    }

    public function store(Request $request)
    {
    	$data = Request()->validate
    	([
            'name' 			=> 'required|unique:categories',
            'description'	=> 'min:5'
        ],
        [
            'name.required' 		=>  'El nombre de la categoria es requerido!',
            'description.required'	=>  'La descripción debe tener más de 5 caracteres!'
        ]);

    	$categoria = Category::create($data);

    	return back()->with('info','Categoria creada con exito!');
    }

    public function edit($id)
    {
    	$categoria = Category::where('id',$id)->first();
    	return $categoria;
    }

    public function update(Request $request)
    {
    	$id = $request->id;
    	$data = Request()->validate
    	([
            'name' 			=> 'required',
            'description'	=> 'min:5'
        ],
        [
            'name.required' 		=>  'El nombre de la categoria es requerido!',
            'description.required'	=>  'La descripción debe tener más de 5 caracteres!'
        ]);
    	$categoria = Category::where('id',$id)->first();
    	$categoria->update($data);

    	return back()->with('info','Categoria actualizada con exito!');
    }

    public function destroy($id)
    {
    	$categoria = Category::where('id',$id)->first();
    	$categoria->delete();
    	return back()->with('info','Categoria eliminada con exito!');
    }
}
