<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horari extends Model
{
    //
    protected $fillable = ['id' ,'Dia', 'Reservat', 'Room_idRoom', 'Hora'];

    public function room(){
    	 return $this->belongsTo('App\Room');
    }

}
