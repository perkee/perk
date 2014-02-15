<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $title or 'blank page' }}</title>
</head>
<body>
	<h1>{{ $title or 'blank page' }}</h1>
	@yield('content')
</body>
</html>