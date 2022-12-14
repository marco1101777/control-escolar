<?php 
	include('php/conexion.php');
	session_start() ;
		//Basic  session  veryficable 
	include("php/recursos.php") ;
	
	if(!isset($_SESSION[$_COOKIE['id']])){
	 	go("session.php");
	}




	$tbl  = getTable()  ; 
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tabla Alumnos</title>
	<link rel="stylesheet" href="static/css/tabla.css">
</head>
<body>

	<div class="all">
			<?php  echo $tbl ;?>
	</div>
	<a href="index.php" class="back">Home</a>
</body>
</html>
