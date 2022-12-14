<?php 
	include("recursos.php"); 
	include("conexion.php");
	$respuesta = "" ; 
	session_start() ;
	if(isset($_GET['delete'])){
		$id  = $_GET['id'];
		if(delete($id,"Alumno")){
			// echo "Eliminado :D"; 

			go('../tablaAlumnos.php') ;
		}else{
			// echo "No Eliminado" ;
			go('../tablaAlumnos.php') ;
		}
	}

	if(isset($_GET['update'])){
		$id  =  $_GET['id'] ;
		$data = getOneUser($id) ;   
		echo renderFormUpdate($data) ;  
	}


	if(isset($_POST['registro'])){

		$Nombre = $_POST['Nombre'] ;
		$Apellido_paterno = $_POST['Apellido_paterno'] ;
		$Apellido_materno = $_POST['Apellido_materno'] ;
		$Grupo = $_POST['grupo'] ;
		$Bachillerato = $_POST['bachillerato'] ;
		$numero =  $_POST['numero_control'] ;

		if ( insertRegistro([$numero,$Nombre,$Apellido_paterno,$Apellido_materno,$Grupo,$Bachillerato ]) ) {
			echo json_encode("{'Respuesta' : 'Registrado  con exito'}" ); 


		}else{
			echo json_encode("{'Respuesta' : 'Algo salio mal'}") ; 
		}
 
		


	}

	if(isset($_POST['inicio'])){
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$ver = $db->query("SELECT * FROM login WHERE user = '{$user}'");
				

				$respuesta = "Bienveido"; 
				if($ver){
					$row = $ver->fetchArray();

					if($row['password'] == $pass ){
						$USUARIO = "user".$row['id'];
						$_SESSION[$USUARIO] = $user;
						$cookie_name = "id";
						$cookie_value = $USUARIO;
						setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
						echo "<script>window.location.assign('menu.php')</script>" ;
					}else{
						$respuesta = "Datos incorrectos";
						echo "<script>window.location.assign('index.php?sms=$respuesta')</script>";   	
					}
				}else{
						$respuesta = "Datos incorrectos";
						echo "<script>window.location.assign('index.php?sms=$respuesta')</script>";
				}
			}
			//requerido solo si convertimos este archivo en una api visual 
			// else if(!isset($_SESSION[$_COOKIE['id']])){
			// 	header("location:index.php");
			// }
	

?>