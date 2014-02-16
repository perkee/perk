<?
//default values
$title = 'no title';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{isset($title) ? $title : 'no title'}}</title>
</head>
<body>
	<h1>{{isset($title) ? $title : 'no title'}}</h1>
	@yield('content')
</body>
</html>