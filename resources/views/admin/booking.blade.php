@extends('admin_layout')

@section('title')
		Bookings Dashboard
@stop

@section('main-content')

<br />
<div class="row">
	      <div class="col-sm-12">
                <ul class="nav nav-tabs nav-justified">
                  <li><a href="{{URL('admin/users/create')}}" class="btn btn-primary">Create New Booking</a></li>
                  <li><a href="{{URL('')}}">View Bookings</a></li>
                  <li><a href="{{URL('')}}">Page 3</a></li>
                </ul>
           </div>
</div>
<br />

<div class="row">
	<div class="col-sm-12">
			<h4 style="text-align: center;">View Bookings</h4>

			<table class="table table-bordered">
				<tr>
					<th>Booking ID</th>
					<th>User ID</th>
					<th>Service ID</th>
					<th>Booking Price</th>
					<th>Booking Duration</th>
					<th>Booking Date</th>
					<th>Booking Time</th>
				</tr>
				@foreach ($bookings as $booking)
					<tr>
						<td>{{$booking->id}}</td>
						<td>{{$booking->user_id}}</td>
						<td>{{$booking->service_id}}</td>
						<td>£{{$booking->service_price}}</td>
						<td>{{$booking->service_time}} minutes</td>
						<td>{{$booking->booking_date}}</td>
						<td>{{$booking->booking_time}}</td>
					</tr>
				@endforeach
			</table>

	</div>
</div>
		
@stop