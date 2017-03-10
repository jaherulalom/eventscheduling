<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = ['name', 'price', 'time'];


    public function booking(){
    	return $this->hasMany('App\Booking');
    }
}
