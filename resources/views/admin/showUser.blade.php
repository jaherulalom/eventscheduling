	<table class="table table-bordered">
		<tr>
			<th>column 1</th>
			<th>Column 2</th>
		</tr>
		<tr>
			<td>Retailer ID</td>
			<td>{{$user->id}}</td>
		</tr>
		<tr>
			<td>Retailer Name</td>
			<td>{{$user->first_name}}</td>
		</tr>
		<tr>
			<td>Retailer Location</td>
			<td>{{$user->last_name}}</td>
		</tr>
		<tr>
			<td>Retailer Email</td>
			<td>{{$user->email}}</td>
		</tr>
		<tr>
			<td>Retailer Secret</td>
			<td>{{$user->number}}</td>
		</tr>
		
	</table>