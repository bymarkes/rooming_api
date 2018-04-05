<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    //
    protected $fillable = ['id' , 'Nom' , 'Cognom', 'Nick', 'Contrasenya', 'Email', 'AnyNaixement', 'Poblacio', 'Puntuacio', 'Tipus'];

    public function fotos(){
    	 return $this->hasMany('App\Foto');
    }

    public function establiments(){
    	 return $this->hasMany('App\Establiment');
    }

    public function reservas(){
    	 return $this->hasMany('App\Reserva');
    }

    public function hasGrup(){
    	 return $this->hasMany('App\GrupHasUsuari');
    }
}
