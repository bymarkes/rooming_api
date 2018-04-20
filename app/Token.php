<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Token extends Model
{
    //
    protected $fillable = ['id' , 'usuari_id' , 'creat', 'token'];
    public $timestamps = false;

    public function usuari(){
    	 return $this->belongsTo('App\Usuari');
    }
}
