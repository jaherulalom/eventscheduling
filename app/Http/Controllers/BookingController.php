<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Service;
use App\Booking;
use App\User;
use DB;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bookings = Booking::all();
        return view ('admin.booking', compact('bookings') );
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $services = \DB::table('services')->lists("name", "id");
        return view ('reservations', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = \Input::only("booking_date", "booking_time");
        $bookings = new Booking($data);
        $bookings->user_id = auth()->user()->id;
        $bookings->service_id = $request->get('service');
        $bookings->service_price = $request->get('price');
        $bookings->service_time = $request->get('time');
        $bookings->booking_date = $request->get('booking_date');
        $bookings->booking_time = $request->get('booking_time');
        $bookings->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function showCustomers(){

        $customers = DB::table('users')->where('role', '1')->get();
        return view ('admin.manageCustomers', compact('customers'));
    }

    public function showStaff(){
        // $staffs = DB::table('users')->where('role', '2')->get();
        $staffs = User::all();
        return view ('admin.manageStaff', compact('staffs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function myformAjax($id)
    {
        $prices = DB::table("services")
                    ->where("id",$id)
                    ->lists("price");
        return json_encode($prices);
    }
        public function serviceTime($id)
    {
        $times = DB::table("services")
                    ->where("id",$id)
                    ->lists("time");
        return json_encode($times);
    }
}
