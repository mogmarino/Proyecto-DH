<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Producto;

class Carrito extends Model
{
    public $guarded = [];

    public function producto(){
      return $this->belongsToMany(
        Producto::class,
        "productos_carritos",
        "carrito_id",
        "producto_id"
      );
    }
}
