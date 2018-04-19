<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Token extends Model
{
    //
    protected $fillable = ['id' , 'token' , 'usuari_id' , 'creat'];
    public $timestamps = false;

    public function usuari(){
    	 return $this->belongsTo('App\Usuari');
    }
}
