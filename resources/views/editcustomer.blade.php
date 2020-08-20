@extends('layout')
@section('content')
<h1>EditCostumer</h1>


			
   <form action="" method="POST">
        @csrf

        @method('GET')
       
           <input type="text" name="title" value=""class="form-control" placeholder="Change the customer name">
                
              <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  	
@endsection
