@extends('default')

<?php
	$title = 'shops';
?>
@section('content')
	@foreach($shops as $shop)
		<h2>{{ $shop->name }}</h2>
		<ul>
		@foreach($shop->snacks as $snack)
			<li>{{ $snack->name }}: {{ sprintf('$%1.02f',$snack->pivot->price/100) }}</li>
		@endforeach
		</ul>
	@endforeach
@stop