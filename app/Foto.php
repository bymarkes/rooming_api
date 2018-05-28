<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    //
    protected $fillable = ['id' , 'URL' , 'usuari_id', 'room_id', 'establiment_id', 'principal'];
    public $timestamps = false;

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
