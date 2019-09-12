<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
use App\Producto;
use App\ProductoCarrito;


class CarritosController extends Controller
{
    // public function vista(){
    //   return view('addCarrito');
    // }

    public function list(){
      $pedidos= Carrito::paginate(20);

      // $productos = $pedidos->pedido;
      // dd($pedidos[0]);

      return view('/carritos',compact('pedidos',));
    }

    public function agregar(Request $form){

      $id = $form["id"];


      $producto = Producto::find($id);
      // dd($producto);
      $carrito = new Carrito();

      $carrito->pedido = $producto->nombre;

      // dd($carrito);

      $carrito->save();

      $carrProd = new ProductoCarrito();

      $carrProd->producto_id = $producto->id;
      $carrProd->carrito_id = $carrito->id;

      $carrProd->save();

      return redirect('/carritos');

    }
}
