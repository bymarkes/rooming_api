<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establiment extends Model
{
    //
    protected $fillable = ['id' , 'Nom' , 'Valoracio', 'Vots', 'Preu', 'Descripcio', 'Establiment_idEstabliment', 'Categoria_idCategoria'];

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
