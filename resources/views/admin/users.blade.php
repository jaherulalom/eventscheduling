@extends('admin_layout')

@section('title')
		Users Dashboard
@stop

@section('main-content')

<br />
<div class="row">
	      <div class="col-sm-12">
                <ul class="nav nav-tabs nav-justified">
                  <li><a href="{{URL('admin/users/create')}}" class="btn btn-primary">Create New User</a></li>
                  <li><a href="{{URL('admin/customers')}}" class="btn btn-info">Manage Customers</a></li>
                  <li><a href="{{URL('')}}">Manage Staff</a></li>
                  <li><a href="{{URL('')}}">Page 3</a></li>
                </ul>
           </div>
</div>
<br />

<div class="row">
	<div class="col-sm-12">
			<h4 style="text-align: center;">Table</h4>

	</div>
</div>
		
@stop