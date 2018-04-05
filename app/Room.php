<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = ['id' , 'Nom' , 'Provincia', 'Poblacio', 'Direccio', 'Telefon', 'Email', 'Usuai_idUsuari'];
}
