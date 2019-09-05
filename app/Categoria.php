<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Producto;

class Categoria extends Model
{
    public $guarded = [];

    public function producto(){
      return $this->hasMany(Producto::class,"categoria_id");
    }
}
