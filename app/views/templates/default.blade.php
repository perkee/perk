<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@yield('meta')
	<title>
		@yield('title','default page title')
	</title>
</head>
<body>
	<header>
		<h1>@yield('title','default page title')</h1>
		<nav>nav goes here</nav>
	</header>
	<article id="content">
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

