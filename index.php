
<?php 
	include("php/conexion.php")  ; 
	session_start() ;
	//Basic  session  veryficable 
	include("php/recursos.php") ;
	
	if(!isset($_SESSION[$_COOKIE['id']])){
	 	go("session.php");
	}



?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="static/css/style.css">

	<title>Control</title>
</head>
<body>
	<div class="all">
		<div class="header">
			<span>Bienvenido <strong> <?php  $nombre = getDataUser($_COOKIE["id"]) ; echo $nombre["Nombre"] ; ?> </strong> al panel de acceso</span>
		</div>
		<div class="menu">
			<a href="log.php">Registro</a>
			<a href="tablaAlumnos.php">Ver registros</a>
		</div>
		
		<?php echo "<a id='exit' href='php/registro.php?del=".$_COOKIE["id"]."'><img src='static/img/exit.svg' alt='salir'></a>";?>
	</div>
</body>
</html>


