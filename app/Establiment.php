<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establiment extends Model
{
    //
    protected $fillable = ['id' , 'Nom' , 'Valoracio', 'Vots', 'Preu', 'Descripcio', 'Establiment_idEstabliment', 'Categoria_idCategoria'];
}
