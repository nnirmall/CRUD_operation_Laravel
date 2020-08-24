@extends('layout')
@section('content')
<br><br><br>
<h1>Adding Costumers</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{action('CustomerController@store')}}" method='POST' enctype="multipart/form-data">
		<label class="">Customer Name</label>
		<input type= "text"  name= "name" placeholder="Enter Customer Name"  ><br>
		<label class="">Customer Profile Image</label>
		<input type="file" name="image" /><br>
		<button type="submit"class="btn btn-success"> Add customer </button>
		@csrf
		</form><br>
		<h1>Listing Costumers</h1>
			<table class="table table-bordered table-striped" >
				<tr>
					<th width="5px">Customer Name</th>
					<th width="15px" >Control your DATA</th>	
					<th width="10%"> Images</th>
				</tr>	

		@foreach ($customer as $customer )
				<tr>
					<th>{{$customer->name}}</th>
					<th>
					<a class="btn btn-xs btn btn-warning" href="editcustomer/{{$customer->id}}">Edit Customer</a>
					
						<a class="btn btn-xs  btn-danger" href="deletecustomer/{{$customer->id}}">Delete Customer</a>
					</th>
					<th>
					<img src=" {{URL::to('/') }}/images/{{ $customer->image }}" class="img-thumbnail" />
					</th>
				</tr>	
				@endforeach
			</table>



		
	

	
@endsection