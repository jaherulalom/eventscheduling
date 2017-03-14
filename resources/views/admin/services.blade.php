@extends('admin_layout')

@section('title')
		Services Dashboard
@stop

@section('main-content')

<br />
<div class="row">
	      <div class="col-sm-12">
                <ul class="nav nav-tabs nav-justified">
                  <li><a href="{{URL('admin/users/create')}}" class="btn btn-primary">Create New Service</a></li>
                  <li><a href="{{URL('')}}" class="btn btn-danger">Delete Services</a></li>
                </ul>
           </div>
</div>
<br />

<div class="row">
	<div class="col-sm-12">
			<h4 style="text-align: center;">All services</h4>

			<table class="table table-bordered">
				<tr>
					<th>Service ID</th>
					<th>Name</th>
					<th>Price</th>
					<th>Duration</th>
				</tr>
				@foreach ($services as $service)
					<tr>
						<td>{{$service->id}}</td>
						<td>{{$service->name}}</td>
						<td>£{{$service->price}}</td>
						<td>£{{$service->time}} minutes</td>
					</tr>
				@endforeach
			</table>

	</div>
</div>
		
@stop