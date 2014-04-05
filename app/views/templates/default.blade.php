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
</body>
</html>

