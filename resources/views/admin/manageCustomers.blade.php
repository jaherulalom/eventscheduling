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
                  <li><a href="{{URL('admin/staff')}}" class="btn btn-warning">Manage Staff</a></li>
                  <li><a href="{{URL('')}}">Page 3</a></li>
                </ul>
           </div>
</div>
<br />

<div class="row">
	<div class="col-sm-12">
			<h4 style="text-align: center;">Customers</h4>

      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Number</th>
        </tr>
        @foreach ($customers as $customer)
          <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->first_name}}</td>
            <td>{{$customer->last_name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->number}}</td>
          </tr>
        @endforeach
      </table>

	</div>
</div>
		
@stop