@extends('default')

<?php
	$title = 'new shop';
	$fields = [
		['name',  'Name',  'Jaime\'s Bodega'],
		['street','Street','123 Fake Street'],
		['zip',   'ZIP',   '11103']
	];
?>

@section('content')
	{{Form::open(['url' => 'new-shop'])}}

		@foreach($fields as $field){{
			Form::label($field[0],$field[1]),
			Form::text($field[0],'',['placeholder'=>$field[2]])
		}}

		@endforeach
		@foreach ($snacks as $idx => $snack){{
			Form::label('snack-'.$snack->id,$snack->name),
			Form::checkbox("snacks[$snack->id]",$snack->id,false,['id'=>'snack-'.$snack->id]),
			Form::text("prices[$snack->id]",$snack->id / 2)
		}}

		@endforeach

		{{Form::submit()}}

	{{Form::close()}}

@stop
