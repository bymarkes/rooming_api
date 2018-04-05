<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    //
    protected $fillable = ['id' , 'URL' , 'Usuari_idUsuari', 'Room_idRoom', 'Establiment_idEstabliment'];
}
