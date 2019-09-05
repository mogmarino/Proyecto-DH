<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class MarcasController extends Controller
{
    public function list(){
      $marcas = Marca::paginate(20);
      return view('/marcas',compact('marcas'));
    }

    public function buscar($id){
      $marca = Marca::find($id);
      return view('marca',compact('marca'));
    }
}
