@extends('layout')
@section('content')
<h1>EditCostumer</h1>


<ul>
		@foreach ($customer as $customer )
			{{$customer-> name}}
			
	
			<form action="{{route('customer',[$customer->id])}}" method="POST">
			
			 @method('DELETE')
			 @csrf
			 <button type="submit">Delete</button>               
			</form>
		@endforeach
		
	</ul>





	
@endsection
