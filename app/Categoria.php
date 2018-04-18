<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //	
    protected $fillable = ['id' , 'Titol' , 'Descripcio'];
    public $timestamps = false;

    public function rooms(){
    	 return $this->hasMany('App\Room');
    }
    
}
