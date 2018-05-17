<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gps extends Model
{
    //
    protected $fillable = ['id' , 'Lat' , 'Lon', 'establiment_id'];
	public $timestamps = false;

    public function establiment(){
    	 return $this->hasOne('App\Establiment');
    }

}
