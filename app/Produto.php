<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    public function categoria(){

        return $this->belongsTo('App\Categoria','id_categoria'); //belongsTo = ele associa o modelo(produto) ao modelo(categoria) ,vc passa o caminho e o nome da coluna que deseja

    }

}
