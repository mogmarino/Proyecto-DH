<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
  public function list(){
    $productos = Producto::paginate(20);
    return view('/productos',compact('productos'));
  }

  public function buscar($id){
    $producto = Producto::find($id);
    return view('producto', compact('producto'));
  }
}
