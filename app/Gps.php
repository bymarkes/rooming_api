<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gps extends Model
{
    //
    protected $fillable = ['id' , 'Latitud' , 'Longitud', 'Establiment_idEstabliment'];
}
