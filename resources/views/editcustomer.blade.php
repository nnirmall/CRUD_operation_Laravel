@extends('layout')
@section('content')
<br><br><br>
<h1>Editing Costumer</h1>



<form method="post" action="{{action('CustomerController@update')}}" enctype="multipart/form-data">
	@csrf
	@method('POST')
	<table style="">
	<tr>
	<th width="150px">
	<label class="label label-default">Selected Customer:  {{$customer-> name}}</label></th></tr>
	<tr>
	<!-- <th width="250px">
	<label class="label label-default">Change Customer "{{$customer-> name}}"" to </label></th> -->
	<input type="hidden" name="id" value="{{$customer->id}}" placeholder="" class="" />
	<th ><input type="text" name="name" value="" placeholder="Enter New Name" class="" required /> </th>
	<th>
		<input type="submit" name="edit" class="btn btn-success" value="Update" /> </th></th>

</tr>
</form>


	
@endsection