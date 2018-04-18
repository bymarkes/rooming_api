<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentari extends Model
{
    //
    protected $fillable = ['id' , 'Text', 'Titol' , 'Valoracio', 'room_id'];
    public $timestamps = false;
 
    public function room(){
    	return $this->belongsTo('App\Room');
    }
    

}
