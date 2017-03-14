  @extends('admin_layout')

@section('title')
		Staff Dashboard
@stop

@section('main-content')

<br />
<div class="row">
	      <div class="col-sm-12">
                <ul class="nav nav-tabs nav-justified">
                  <li><a href="{{URL('admin/users/create')}}" class="btn btn-primary">Create New User</a></li>
                  <li><a href="{{URL('admin/customers')}}" class="btn btn-info">Manage Customers</a></li>
                  <li><a href="{{URL('admin/staff')}}" class="btn btn-warning">Manage Staff</a></li>
                </ul>
           </div>
</div>
<br />

<div class="row">
	<div class="col-sm-12">
			<h4 style="text-align: center;">Staff</h4>

      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Number</th>
        </tr>
        @foreach ($staffs as $staff)
          @if ($staff->role == '2')
          <tr>
            <td>{{$staff->id}}</td>
            <td>{{$staff->first_name}}</td>
            <td>{{$staff->last_name}}</td>
            <td>{{$staff->email}}</td>
            <td>{{$staff->number}}</td>
          </tr>
          @endif
        @endforeach
      </table>

	</div>
</div>
<div class="row">
  <div class="col-sm-12">
      <h4 style="text-align: center;">Managers</h4>

      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Number</th>
        </tr>
        @foreach ($staffs as $staff)
          @if ($staff->role == '3')
          <tr>
            <td>{{$staff->id}}</td>
            <td>{{$staff->first_name}}</td>
            <td>{{$staff->last_name}}</td>
            <td>{{$staff->email}}</td>
            <td>{{$staff->number}}</td>
          </tr>
          @endif
        @endforeach
      </table>

  </div>
</div>
		
@stop