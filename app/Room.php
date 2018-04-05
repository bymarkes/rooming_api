<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = ['id' , 'Nom' , 'Provincia', 'Poblacio', 'Direccio', 'Telefon', 'Email', 'Usuai_idUsuari'];

    public function ofertas(){
    	 return $this->hasMany('App\Oferta');
    }

    public function comentaris(){
    	 return $this->hasMany('App\Comentari');
    }

    public function horaris(){
    	 return $this->hasMany('App\Horari');
    }

    public function reservas(){
    	 return $this->hasMany('App\Reserva');
    }

    public function fotos(){
    	 return $this->hasMany('App\Foto');
    }

    public function categoria(){
    	 return $this->belongsTo('App\Categoria');
    }

    public function establiment(){
    	 return $this->belongsTo('App\Establiment');
    }
}
