<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Producto;

class Marca extends Model
{
    public $guarded = [];

    public function producto(){
      return $this->belongsToMany(
        Producto::class,
        "productos_marcas",
        "marca_id",
        "producto_id"
      );
    }
}
