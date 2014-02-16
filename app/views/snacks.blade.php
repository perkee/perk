@extends('default')

<?php
	$title = 'snacks!';
?>


@section('content')
	@foreach($snacks as $snack)
		<h2>{{ $snack->name }}</h2>
		<ul>
		@foreach($snack->shops as $shop)
			<li>{{ $shop->name }}</li>
		@endforeach
		</ul>
	@endforeach
@stop
