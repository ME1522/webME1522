<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Imagewall</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);
			
		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
			background-color: #000
		}
		
		
		a, a:visited {
			text-decoration:none;
		}
		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}


		#Menu {
	width:900px;

	height:30px;

	background-color: #0f4c77;
	opacity: 0.7;

	margin:auto;
	right: 120px;
	top: 80px;
}
#home{
	margin-left: 6px;
}
	</style>

</head>
<body>
	<div class="welcome">
		<a href="#" title="Laravel PHP Framework"><img>
			<h1>You have arrived.</h1>
	</div>

	<div id="Menu">
		<a href="#"><button type="button" id="home" onclick="#">Home</button></a>
		<a href="#"><button type="button" id="home" onclick="#">Random</button></a>
		<a href="#"><button type="button" id="home" onclick="#">Latest</button></a>
		<button type="button" id="hej" onclick="alert('Hej nu tryckte du fel !')">Vågar du trycka?</button>
		
	
	</div>

</body>
</html>