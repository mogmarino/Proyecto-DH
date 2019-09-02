<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use App\Marca;
use App\Carrito;



class Producto extends Model
{
    public $guarded = [];

    public function categoria(){
      return $this->belongsTo(Categoria::class,"categoria_id");
    }

    public function marca(){
      return $this->belongsToMany(
        Marca::class,
        "productos_marcas",
        "producto_id",
        "marca_id"
      );
    }

    public function carrito(){
      return $this->belongsToMany(
        Carrito::class,
        "productos_carritos",
        "producto_id",
        "carrito_id"
      );
    }
}
