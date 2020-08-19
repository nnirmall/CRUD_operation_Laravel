@extends('layout')
@section('content')
<h1>Costumer</h1>

<form action="customer" method='POST'>
		<div>
		<input type= "text" name= "name">
		</div>
		<button type="submit"> Add customer </button>
		@csrf


		</form>

	<?php

		foreach ($customer as $customer ) {
			echo '<li>'. $customer->name. '</li>';
		}

	?>
@endsection