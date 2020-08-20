@extends('layout')
@section('content')
<h1>Costumer</h1>

<form action="customer" method='POST'>
		<input type= "text"  name= "name" placeholder="Enter Customer Name" required >
		<button type="submit"class="btn btn-success"> Add customer </button>
		@csrf
		</form>
		<p></p>

		@foreach ($customer as $customer )
			<table style="">
				<tr>
					
				
					<th width="200px">
					 {{$customer->name}}
					</th>
					<th>
						<a class="btn btn-xs  btn-secondary" href="editcustomer/{{$customer->id}}">Edit Customers</a>
					</th>

					<th>
						<a class="btn btn-xs  btn-danger" href="deletecustomer/{{$customer->id}}">Delete Customers</a>
					</th>

					

			
				</tr>	
			</table>



		@endforeach
	

	
@endsection