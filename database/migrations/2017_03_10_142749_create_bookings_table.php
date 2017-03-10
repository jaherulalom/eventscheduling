<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('bookings', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->integer('service_price');
            $table->integer('service_time');
            $table->string('booking_date');
            $table->string('booking_time');
        });
    }

    /**
     * Reverse the migrations.       
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('bookings');
    }
}
