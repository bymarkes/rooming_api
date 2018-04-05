<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grup extends Model
{
    //
    protected $fillable = ['id' , 'Nom' , 'Categoria', 'Poblacio'];

    /*public function grupHasUsuari(){
    	 return $this->hasMany('App\GrupHasUsuari');
    }*/
}
