<link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<h4 style="text-align: center;">Select Package</h4>
<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-4">
		
		<div class="panel panel-info" style="padding: 20px;">
			<div class="panel-heading">
				<p>New booking details</p>
			</div>
			<div class="panel-body">
				<p>
					{!! Form::open(array("url"=>"bookings", "class"=>"form-horizontal")) !!}

					<select name="service" class="form-control" style="width:350px">
						<option value="">--- Select Service ---</option>
						@foreach ($services as $key => $value)
						<option  value="{{ $key }}">{{ $value }}</option>
						@endforeach
					</select>
					<br />
                		<label for="price">This cost for this service is:</label><br />£
                		<select name="price">
                			<option id="price"></option>
                		</select><br />
                		<label for="time">This duration for this service is:</label><br />
                		<select name="time">
                			<option id="time"></option>
                		</select>
                		<br />
                		<br />
						{!! Form::label("booking_date", "Enter Date", array("class"=>"col-md-2")) !!}
						{!! Form::text("booking_date","",array("placeholder"=>"Enter Date", "class="=>"form-control")) !!}
 						<br />
 						<br />
            			{!! Form::label("booking_time", "Enter Time", array("class"=>"col-md-2")) !!}
						{!! Form::text("booking_time","",array("placeholder"=>"Enter Time", "class="=>"form-control")) !!}
						<br />
						<br />
						{!! Form::submit('Book', array("class"=>"btn btn-primary","id"=>"btn")) !!}

   					 {!! Form::close() !!}
				</p>

			</div>
		</div>
	
	</div>
	<div class="col-md-4">
		<div class="panel panel-default" style="padding: 20px;">
			<div class="panel-heading">
				<p>Information</p>
			</div>
			<div class="panel-body">

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
        $('select[name="service"]').on('change', function() {
            var serviceID = $(this).val();
            if(serviceID) {
                $.ajax({
                    url: '/myform/ajax/'+serviceID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('option[id="price"]').empty();
                        $.each(data, function(key, value) {
                            $('option[id="price"]').append('<p value="'+ key +'">'+ value +' </p>');
                        });

                    }
                });
            }else{
                $('option[id="price"]').empty();
            }
        });
    });



    $(document).ready(function() {
        $('select[name="service"]').on('change', function() {
            var serviceID = $(this).val();
            if(serviceID) {
                $.ajax({
                    url: '/serviceTime/ajax/'+serviceID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('option[id="time"]').empty();
                        $.each(data, function(key, value) {
                            $('option[id="time"]').append('<p value="'+ key +'">'+ value +' minutes</p>');
                        });

                    }
                });
            }else{
                $('option[id="time"]').empty();
            }
        });
    });
</script>