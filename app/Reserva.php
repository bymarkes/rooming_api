<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //
    protected $fillable = ['id' , 'Nom' , 'Provincia', 'Poblacio', 'Direccio', 'Telefon', 'Email', 'usuari_id'];

    public function usuari(){
    	 return $this->belongsTo('App\Usuari');
    }

    public function room(){
    	 return $this->belongsTo('App\Room');
    }
}
