@extends('admin_layout')

@section('title')
		Users Dashboard
@stop

@section('main-content')

<br />
<div class="row">
	<h1 class="text-center">Create new user</h1>
  <p>
    {!! Form::open(array("url"=>"admin/users", "class"=>"form-horizontal")) !!}

    <div class="form-group">
      {!! Form::label("first_name", "Enter First Name", array("class"=>"col-md-2")) !!}
      <div class="col-md-10"> 
      {!! Form::text("first_name","",array("placeholder"=>"Enter First Name", "class="=>"form-control")) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label("last_name", "Enter Last Name", array("class"=>"col-md-2")) !!}
      <div class="col-md-10"> 
      {!! Form::text("last_name","",array("placeholder"=>"Enter Last Name", "class="=>"form-control")) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label("email", "Enter Email", array("class"=>"col-md-2")) !!}
      <div class="col-md-10"> 
      {!! Form::email("email", "", array("Placeholder"=>"Enter Email", "class="=>"form-control")) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label("number", "Enter Number", array("class"=>"col-md-2")) !!}
      <div class="col-md-10"> 
      {!! Form::text("number","",array("placeholder"=>"Enter Number", "class="=>"form-control")) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label("role", "Select Role", array("class"=>"col-md-2")) !!}
      <div class="col-md-10"> 
      {!! Form::select('role', [
                  '1' => 'Customer',
                  '2' => 'Admin',
                  '3' => 'Super Admin']
      ) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label("password","Enter Password", array("class"=>"col-md-2")) !!}
      <div class="col-md-10"> 
      {!! Form::password("password", array("placeholder"=>"Enter Password", "class="=>"form-control")) !!}
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-2"> {!! Form::submit('Save', array("class"=>"btn btn-primary","id"=>"btn")) !!}  </div>
      <div class="col-md-10"><a href="{{url('admin/users')}}" class="btn btn-success">Back..</a></div>
    </div>


    {!! Form::close() !!}



  </p>

  @if($errors->has())
  <p class="alert alert-danger"> 
    @foreach($errors->all() as $error)
      {{ $error }} 
      <br />
    @endforeach
    </p>

  @endif
    
</div>
		
@stop