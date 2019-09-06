<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Marca;
use App\Categoria;
use App\ProductoMarca;



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

  public function add(){
    $marcas = Marca::all();
    $categorias = Categoria::all();

    return view('addProducto',compact('marcas','categorias'));
  }

  public function agregar(request $req){

    $rules = [
      "nombre" => "string |required |min:0 |max:200 ",
      "precio" => "required | numeric | min:0 | max:10000",
      "stock" => "required | integer |min:0 | max:100",
      "ingreso" => "required | date",
      "categoria" => "required",
      "marca" => "required",
      "avatar" => "required | image"
    ];

    $msjs = [
      "required" => "El campo :attribute es requerido",
      "max" => "El campo :attribute tiene más de :max caracteres",
      "min" => "El mínimo del campo :attribute es :min",
      "numeric" => "El campo :attribute debe ser un número",
      "integer" => "El campo :attribute debe ser un entero",
      "string" => "El campo :attribute debe ser de texto",
      "date" => "El campo :attribute debe ser una fecha",
      "image" => "El campo :attribute debe tener la extensión jpeg, png, bmp, gif, svg o webp",
    ];

    $this->validate($req, $rules, $msjs);

    $nuevoProducto = new Producto();

    $ruta = $req->file("avatar")->store("public");

    $fileName = basename($ruta);

    $nuevoProducto->nombre = $req["nombre"];
    $nuevoProducto->precio = $req["precio"];
    $nuevoProducto->stock = $req["stock"];
    $nuevoProducto->ingreso = $req["ingreso"];
    $nuevoProducto->categoria_id = $req["categoria"];
    $nuevoProducto->avatar = $fileName;

    $nuevoProducto->save();

    $nuevoProdMarc = new ProductoMarca();

    $nuevoProdMarc->producto_id = $nuevoProducto->id;
    $nuevoProdMarc->marca_id = $req["marca"];

    $nuevoProdMarc->save();

    return redirect("/producto/". $nuevoProducto->id);

  }
}
