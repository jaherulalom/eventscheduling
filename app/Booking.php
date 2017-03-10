<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = ['service_price', 'service_time','booking_date', 'booking_time'];


    public function user (){
		return $this->belongsTo('App\User');
    }

   public function service(){
   		return $this->belongsTo('App\Service');
   }
}
