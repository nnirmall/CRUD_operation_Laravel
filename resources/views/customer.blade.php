@extends('layout')
@section('content')
<br><br><br>
<h1>Adding Costumers</h1>
<br>

<form action="customer" method='POST'>
		<input type= "text"  name= "name" placeholder="Enter Customer Name" required >
		<button type="submit"class="btn btn-success"> Add customer </button>
		@csrf
		</form><br>
		<h1>Listing Costumers</h1>
			<table style="" border-collapse="collapse">
				<tr>
					<th width="200px" height="50px">Customer Name</th>
					<th width="145px" height="50px">Control your DATA</th>	
				</tr>

		@foreach ($customer as $customer )
				<tr>
					<th>{{$customer->name}}</th>
					<th>
					<a class="btn btn-xs btn btn-warning" href="editcustomer/{{$customer->id}}">Edit Customer</a>
					</th>

					<th>
						<a class="btn btn-xs  btn-danger" href="deletecustomer/{{$customer->id}}">Delete Customer</a>
					</th>
				</tr>	
				@endforeach
			</table>



		
	

	
@endsection