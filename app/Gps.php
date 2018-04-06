<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gps extends Model
{
    //
    protected $fillable = ['id' , 'Latitud' , 'Longitud', 'establiment_id'];

    public function establiment(){
    	 return $this->hasOne('App\Establiment');
    }

}
