<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establiment extends Model
{
    //
    protected $fillable = ['id' , 'Nom' , 'Provincia', 'Poblacio', 'Direccio', 'Telefon', 'Email', 'usuari_id'];

    public function rooms(){
    	 return $this->hasMany('App\Room');
    }

    public function fotos(){
    	 return $this->hasMany('App\Foto');
    }

    public function gps(){
    	 return $this->hasOne('App\Gps');
    }

    public function usuari(){
    	 return $this->belongsTo('App\Usuari');
    }
}
