<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function produtos(){
        return $this->hasMany('App/Produto','id_categoria'); //relaciona uma categoria com um produto
    }
}