@extends('templates/page')

@section('meta')
	<meta name="description" content="dscription of foo">
@stop

<?php
	$title = 'The Foo page';
?>

@section('content')
	<p>
		The foo page has boring content
		including a link to <a href="{{ URL::to('jux')}}">jux</a>
	</p>

@stop
