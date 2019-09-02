<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;

use App\Categoria;

use Faker\Generator as Faker;


$categorias = Categoria::all();

$factory->define(Producto::class, function (Faker $faker) use ($categorias){
    return [
        "nombre" => $faker->realText(100),
        "precio" => $faker->randomFloat(NULL, 0, 10000),
        "stock" => $faker->numberBetween(0,100),
        "ingreso" => $faker->date('Y-m-d','now'),
        "categoria_id" =>$categorias->shuffle()[0]->id,
        "avatar" => $faker->imageUrl('640','480','cats')
    ];
});
