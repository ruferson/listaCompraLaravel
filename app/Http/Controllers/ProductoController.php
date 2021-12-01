<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    //
    public function getIndex(){
        $productos = Producto::all();
        return view('productos', array('arrayProductos' => $productos));
    }
    public function getShow($id){
        $productos = Producto::findOrFail($id);
        return view('show', array('producto' => $productos), array('id'=>$id));
    }
    public function getCreate(){
        return view('create');
    }
    public function getEdit($id){
        $eso = Producto::findOrFail($id);
        return view('edit', array('id' => $eso));
    }



}

