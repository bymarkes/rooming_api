<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentari extends Model
{
    //
    protected $fillable = ['id' , 'Text', 'Titol' , 'Valoracio', 'Room_idRoom'];

    /*public function room(){
    	return $this->belongsTo('App\Room');
    }*/
}
