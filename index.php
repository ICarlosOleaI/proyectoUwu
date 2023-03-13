<!DOCTYPE html>
<html>
<head>
	<title>Página de inicio</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}

		.header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}

		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}

		li {
			float: left;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li a:hover {
			background-color: #111;
		}
	</style>
</head>
<body>
	<div class="header">
		<h1>Menú de navegación</h1>
	</div>

	<ul>
		<li><a class="active" href="#">Inicio</a></li>
		<li><a href="#">Página 1</a></li>
		<li><a href="#">Página 2</a></li>
		<li><a href="#">Página 3</a></li>
	</ul>

	<div style="padding:20px;margin-top:30px;background-color:#fff;">
		<h2>Contenido de la página de inicio</h2>
		<p>Este es el contenido de la página de inicio.</p>
	</div>

</body>
</html>
