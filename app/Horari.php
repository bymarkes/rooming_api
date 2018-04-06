<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horari extends Model
{
    //
    protected $fillable = ['id' ,'Dia', 'Reservat', 'id_room', 'Hora'];

    public function room(){
    	 return $this->belongsTo('App\Room');
    }

}
