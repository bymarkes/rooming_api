<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    //
    protected $fillable = ['id' , 'URL' , 'Usuari_idUsuari', 'room_id', 'Establiment_idEstabliment'];

    public function usuari(){
    	 return $this->belongsTo('App\Usuari');
    }

    public function establiment(){
    	 return $this->belongsTo('App\Establiment');
    }

    public function ofertas(){
    	 return $this->belongsTo('App\Room');
    }
}
