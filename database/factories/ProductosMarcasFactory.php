<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductoMarca;
use App\Producto;
use App\Marca;
use Faker\Generator as Faker;

$productos = Producto::all();
$marcas = Marca::all();


$factory->define(ProductoMarca::class, function (Faker $faker) use($productos, $marcas){
    return [
      "producto_id" => $productos->shuffle()[0]->id,
      "marca_id" => $marcas->shuffle()[0]->id
    ];
});
