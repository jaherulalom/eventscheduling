<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="{{ asset('bower_components/sweetalert/dist/sweetalert.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset ('bower_components/sweetalert/dist/sweetalert.css') }}">

</head>
<body>

		<div class="container">

           <div class="row">
             <div class="col-md-12">
                <ul class="nav nav-tabs nav-justified">
                  <li><a href="{{URL('/')}}">Home</a></li>
                  <li><a href="{{URL('')}}">Page 1</a></li>
                  <li><a href="{{URL('')}}">Page 2</a></li>
                  <li><a href="{{URL('')}}">Page 3</a></li>
                </ul>
             </div>
           </div>
            <div class="row">
             

    
           </div>
           <div class="row">


 
             <div class="col-md-4">
                  <h5> 
                      <ul class= "nav">
                       <li><a href="{{URL('')}}" class="btn btn-success">Manage Bookings</a></li>
                       <br />
                       <li><a href="{{URL('')}}" class="btn btn-success">Manage Users</a></li>
                       <br />
                       <li><a href="{{URL('')}}" class="btn btn-success">Manage Services</a></li>
                       <br />
                      </ul>
                  </h5>
             </div>
       
         <div class="col-md-8">
                @yield('main-content')               
             </div>

             <div class="col-md-4">
        
             </div>
           </div>

           <footer class="row">
             <div class="col-md-12">
                 <p class="text-center">All Right Reserved @ {{ date('Y')}}</p>
             </div>
           </footer>

		</div>

</body>
</html>