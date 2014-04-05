<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
@yield('meta')
	<title>{{ isset($title) ? $title : 'Default page title' }}</title>
</head>
<body>
	<header>
		{{ isset($title) ? "<h1>$title</h1>" : ''}}
		<nav>nav goes here</nav>
	</header>
	<article id="main">
@yield('content')
	</article>
	<footer>
		<p>footer goes here</p>
	</footer>
	<!--[if lt IE 9]>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<![endif]-->
	<!--[if gte IE 9]><!-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script src="{{ URL::asset('js/jquery-2.0.3.min.js') }}"></script>
	<!--<![endif]-->
	<script src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>

