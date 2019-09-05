<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
{
    public function list(){
      $categorias = Categoria::paginate(20);
      return view('categorias', compact('categorias'));
    }

    public function buscar($id){
      $categoria = Categoria::find($id);
      return view('categoria',compact('categoria'));
    }
}
