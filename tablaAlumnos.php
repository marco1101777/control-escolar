<?php 
	include('php/conexion.php');
	include('php/recursos.php');

	$tbl  = getTable()  ; 
	
?>




<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="static/css/tabla.css">
</head>
<body>

	<div class="all">
			<?php  echo $tbl?>
	</div>
	<a href="index.php" class="back">Home</a>
</body>
</html>