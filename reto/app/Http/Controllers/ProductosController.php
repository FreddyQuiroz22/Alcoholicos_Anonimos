<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;

class ProductosController extends Controller
{
    protected function create()
    {
        request()->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'descripcion' => 'required|string|max:255',
            'img_file' => 'required|image',
        ], [
            //'url_img.required' => 'Debe agregar una imagen',
            'required' => ':attribute es requerido',
            'string' => ':attribute debe ser texto',
            'precio.numeric' => 'precio debe ser un numero decimal con punto',
            'max' => ':attribute debe tener maximo 255 caracteres',
            'img_file.image' => 'Debe ser una imagen',
            'img_file.required' => 'Debe agregar una imagen',
        ]);
        $img = request('img_file')->store('images');
        productos::create([
            'titulo' => request('titulo'),
            'autor' => request('autor'),
            'precio' => request('precio'),
            'descripcion' => request('descripcion'),
            'url_img' => $img,
            'estado' => 'ACTIVO'
        ]);
        return redirect('home');
        //return $img;
    }

    public static function readAll()
    {
        $productos = productos::all();
        return view('Admin.productos', ['productos' => $productos]);
    }
    public static function getProductos()
    {
        $productos = productos::all();
        return $productos;
    }

    protected function readOne($id)
    {
        $productos = productos::find($id);
        return view('Admin.editProductos', ['productos' => $productos]);
    }

    protected function update()
    {
        request()->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'descripcion' => 'required|string|max:255',
            'url_img' => 'image',
        ], [
            'required' => ':attribute es requerido',
            'string' => ':attribute debe ser texto',
            'precio.numeric' => 'precio debe ser un numero decimal con punto',
            'max' => ':attribute debe tener maximo 255 caracteres',
            'url_img.image' => 'Debe ser una imagen',
        ]);
        $producto = productos::find(request('id_producto'));
        $producto->update([
            'titulo' => request('titulo'),
            'autor' => request('autor'),
            'precio' => request('precio'),
            'descripcion' => request('descripcion'),
        ]);
        return  redirect('libros');
    }

    protected function delete()
    {
        $producto = productos::find(request('id_producto'));
        $producto->delete();
        return  redirect('libros');
    }
}
