@extends('default')

@section('content')
	@foreach($shops as $shop)
		<h2>{{ $shop->name }}</h2>
		<ul>
		@foreach($shop->snacks as $snack)
			<li>{{ $snack->name }}</li>
		@endforeach
		</ul>
	@endforeach
@stop