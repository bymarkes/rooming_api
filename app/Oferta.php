<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    //
    protected $fillable = ['id' , 'NomOferta' , 'Descompte', 'Descripcio', 'codiDescompte'];

}
