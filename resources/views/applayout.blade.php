<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

<div data-role="page">
  <div data-role="header">
<!--     <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">Home</a> -->
    @yield('title')
   <!--  <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-search ui-btn-icon-left">Search</a> -->
  </div>

  
   <div data-role="main" class="ui-content">
   @yield('main-content')
  </div>

</div>

</body>
</html>
