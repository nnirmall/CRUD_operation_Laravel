@extends('layout')
@section('content')
<br><br><br>
<h1>Editing Costumer</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{action('CustomerController@update')}}" enctype="multipart/form-data">
	@csrf
	@method('POST')
	<table class="table table-bordered table-striped">
		<tr>
					<th width="35%"><label class="label label-default">Selected Customer:  {{$customer-> name}}</label></th>
					<th width="30%" >Choose New Image</th>	
					<th width="10%" >Previous Image</th>	
					
				</tr>
	
	<tr>
	<!-- <th width="250px">
	<label class="label label-default">Change Customer "{{$customer-> name}}"" to </label></th> -->
	<th>
	<label class="label label-default">Enter New Name</label>
	<input type="hidden" name="id" value="{{$customer->id}}" placeholder="" class="" />
	<input type="text" name="name" value="" placeholder="{{$customer-> name}}" class=""  /></th>
	<th>
		<input type="file" name="image" />
		
	</th>
	<th width="10%">
		<img src=" {{URL::to('/') }}/images/{{ $customer->image }}" class="img-thumbnail" required/>
		<input type="hidden" name="hidden_image" value="{{$customer->image}}"/>
		
		
	</th>
	
	

</tr>
<th>
	<input type="submit" name="edit" class="btn btn-success" value="Update" />
</th>
	
</form>


	
@endsection