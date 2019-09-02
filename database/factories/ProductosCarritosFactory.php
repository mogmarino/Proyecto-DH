<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductoCarrito;
use App\Producto;
use App\Carrito;

use Faker\Generator as Faker;

$productos = Producto::all();
$carritos = Carrito::all();


$factory->define(ProductoCarrito::class, function (Faker $faker) use($productos, $carritos) {
    return [
      "producto_id" => $productos->shuffle()[0]->id,
      "carrito_id" => $carritos->shuffle()[0]->id
    ];
});
