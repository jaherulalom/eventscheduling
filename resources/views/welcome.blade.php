@extends('applayout')

@section('title')
       <h1 style="text-align: center;"> Events App </h1>
@stop

@section('main-content')
         <a href="{{'/bookings/create'}}" class="ui-btn">Making a booking</a>
         <a href="{{URL::to('/auth/logout')}}" class="ui-btn">Logout</a>
@stop
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Events</title>
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">


</head>
<body>

        <div class="row">
            <div class="col-md-12">
                <h5 style="text-align: center;">Welcome</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
               
            </div>
            <div class="col-md-6">

            </div>
        </div>

</body>
</html> -->
