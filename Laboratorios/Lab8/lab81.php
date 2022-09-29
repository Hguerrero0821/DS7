<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laboratorio 8.1</title>
</head>
<body>
	<form method="POST" action="lab81.php">
		<h2>Aplicación web con imagen dinámica</h2>
         <p>Desempeño de ventas realizadas <input type="text" name="valorV"/></p>
         <input type="submit" name="btn">
	</form>


	<?php

	include 'class_lib.php';

	    $sacar_porcentaje = new Porcentaje();
	    $sacar_porcentaje -> sacarPorcentaje($_POST['valorV']);

	?>

</body>
</html>