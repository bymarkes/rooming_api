<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //
    protected $fillable = ['id' , 'Nom' , 'Provincia', 'Poblacio', 'Direccio', 'Telefon', 'Email', 'Usuai_idUsuari'];
}
