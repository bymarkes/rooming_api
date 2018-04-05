<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    //
    protected $fillable = ['id' , 'Nom' , 'Cognom', 'Nick', 'Contrasenya', 'Email', 'AnyNaixement', 'Poblacio', 'Puntuacio', 'Tipus'];
}
