<!doctype html>
<html lang="en">
{{HTML::Style('css/style.css') }}
<head>
	@section('head')
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	@show
</head>
<body >
<div id="Menu">
	<a href="hello.php"><button type="button" id="Menubar" onclick="#">Home</button></a>
	<a href=""><button type="button" id="Menubar">RANDOM</button></a>
	<button type="button" id="Menubar" onclick="alert('Hej nu tryckte du fel !')">Vågar du trycka?</button>
	<a href="/galeri"><button type="button" id="Menubar" onclick="Bildgalleri.php">Bildgalleri</button></a>
	@yield('content')
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
