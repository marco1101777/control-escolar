<?php 
	include('conexion.php') ; 
	include('recursos.php') ;
	if(isset($_POST)){
		$Nombre = $_POST['Nombre'] ;
		$Apellido_paterno = $_POST['Apellido_paterno'] ;
		$Apellido_materno = $_POST['Apellido_materno'] ;
		$Grupo = $_POST['grupo'] ;
		$Bachillerato = $_POST['bachillerato'] ;
		$numero =  $_POST['numero_control'] ;
		$numGrup  =  $_POST['NoGrupo'];
		if ( update([$numero,$Nombre,$Apellido_paterno,$Apellido_materno,$Grupo,$Bachillerato ,$numGrup]) ) {
			echo json_encode("{'Respuesta' : 'Registrado  con exito'}" ); 
			go('../tablaAlumnos.php');
		}else{
			echo json_encode("{'Respuesta' : 'Algo salio mal'}") ; 
			go('../tablaAlumnos.php');
		}
 
	}
?>