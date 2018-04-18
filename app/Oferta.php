<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    //
    protected $fillable = ['id' , 'NomOferta' , 'Descompte', 'Descripcio', 'room_id'];

    public $timestamps = false;
    
    public function room(){
    	 return $this->belongsTo('App\Room');
    }

}
