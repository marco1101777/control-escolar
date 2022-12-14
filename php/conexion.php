<?php 

	include("data.php") ; 
	$connect = mysqli_connect('localhost' , 'root'  , $passwordSQL   , 'Bachilleratos') ; 
	// echo  $connect  ? "Conexion Buena " : "Salio algo mal " ; 
	function transform_data($data){
		$query = '' ;  
		
		$max = sizeof($data);
		
		foreach ($data as $key => $value) {  
		
			$query .= " '$value' " ; 
		
			$query .= $max - 1 > $key ? ' , ' : '' ;  
		
		}
		
		return $query ; 
	} 


	function AorB($grupo){
		$grupo = strtoupper($grupo) ; 
		
		if($grupo[strlen($grupo) - 1] == "B"){
			return  "grupo2" ;
		}else if($grupo[strlen($grupo) - 1] == "A"){
			return "grupo1" ; 
		}
	}
	function existT($No_control){
		global $connect ; 
		$query  = "SELECT  COUNT(*)  AS  cnt FROM Alumnos WHERE  Numero_Control = '{$No_control}' " ; 
		$result  = mysqli_query($connect , $query) ;
		$contado = mysqli_fetch_array($result); 
		return  $contado['cnt'] > 0 ? true  : false ; 
	}

	function insertRegistro($data){
		global $connect ;
		if(existT($data[0] )){
			return true ; 
		}
		$transformado  = transform_data($data); 
		$numero = AorB($data[4]) ; 
		$query = "INSERT INTO   Alumnos (Numero_Control,Nombre,Apellido_paterno,Apellido_materno,Grupo,Bachillerato,Numero_grupo) VALUES 
		({$transformado} , '{$numero}');" ;
		$insert_data = mysqli_query( $connect , $query ) ; 
		return $insert_data  ? true : false ;  
	}


	function  delete($id,$que){
		global $connect ;  
		$query = "" ; 
		if($que ==  "Usuario"){
			$query =    "DELETE   FROM Usuarios WHERE Id = $id";
		
		}else{
			$query  =  "DELETE   FROM Alumnos WHERE Numero_Control = '$id'" ;
		}
		$delete  = mysqli_query($connect ,  $query) ;
		return  $delete  ;  

	}

	function  getOneUser($id){
		global $connect ; 
		$query = "SELECT  * FROM Alumnos WHERE Numero_Control = '{$id}'" ;
		$data = mysqli_query($connect , $query) ;
		return mysqli_fetch_array($data) ;  
	}

	function update($datos){
		global $connect ;

		$query  = "UPDATE Alumnos  SET Nombre = '{$datos[1]}',Apellido_paterno = '{$datos[2]}',Apellido_materno = '{$datos[3]}',Grupo = '{$datos[4]}', Bachillerato = '{$datos[5]}',Numero_grupo = '{$datos[6]}' WHERE Numero_Control = '{$datos[0]}'" ;
		$res  =  mysqli_query($connect , $query);
		return $res ;

		

	}



	function getTable(){
		global $connect  ; 
		$query =  "SELECT * FROM  Alumnos ";  
		$res = mysqli_query($connect , $query) ; 
		$tabla = "<table  borde='1'  class='tablaRegistros'  >  
					<tr class='one'>
						<td>No.Control</td>
						<td>Nombre</td>
						<td>Apellido Paterno</td>
						<td>Apellido Materno</td>
						<td>Grupo </td>
						<td>Bachillerato</td>
						<td>No.grupo</td>
						<td>Opciones</td>
					</tr>
		" ; 
		$cont   = 1 ;
		while($row  =  mysqli_fetch_array($res)){
			$stl =  $cont % 2  ==  0 ? "background:rgba(0,0,0,0.5); color:white;" :  "background:white;" ;
			$tabla  .=  "
					<tr style='{$stl}'>
						<td>{$row['Numero_Control']}</td>
						<td>{$row['Nombre']}</td>
						<td>{$row['Apellido_paterno']}</td>
						<td>{$row['Apellido_materno']}</td>
						<td>{$row['Grupo']}</td>
						<td>{$row['Bachillerato']}</td>
						<td>{$row['Numero_grupo']}</td>
						<td>
							<a href='php/registro.php?id={$row['Numero_Control']}&update'  class='btn' style='--fondo:#2ECC71;'>Update</a>	
							<a href='php/registro.php?id={$row['Numero_Control']}&delete' class='btn'style='--fondo:#E74C3C;' >Delete</a>	
							<a href='php/reporte.php?admin={$row['Numero_Control']}' class='btn'style='--fondo:#2ECC71;' >Info</a>	

						</td>

					</tr>" ;
					$cont += 1 ;

		}
		$tabla .= "</table>" ; 
		return $tabla ; 

	}

	function getTableJSON(){
		global  $connect ;   

		return  0 ; 	

	}

	function insertUsuario($data){
		global $connect ;
		$transformado = transform_data($data); 
		$query = "INSERT  INTO  Usuarios (Usuario,Password,Roll) VALUES ({$transformado}, 'Alumno' ); "  ; 

		$insert_data = mysqli_query( $connect , $query  )  ; 
		
		return $insert_data  ? true : false ; 
	}

	function Grupo($bachillerato){
		global $connect ; 
		$query = "SELECT  COUNT(*) AS cnt FROM Alumnos WHERE Bachillerato = '{$bachillerato}'  &&  Numero_grupo =  '1'  " ; 
		
		$cuantos =  mysqli_query( $connect ,$query ) ; 
		$contador  = mysqli_fetch_array($cuantos);
		
 		return  $contador["cnt"] == 35 ? 2 : 1 ;  
	}
	function  getDataUser($id){
		global $connect ; 
		$idData = explode("user" , $id); 
		$query = "SELECT * FROM  login WHERE Id = '{$idData[1]}'" ;
		$data  = mysqli_query($connect ,$query ) ;
		
		if($data){
			
			$dta = mysqli_fetch_array($data) ; 
			return $dta ;
		}else{
			return "NADA" ;	
		}
	}

	function  reporte($admin, $quien){
		date_default_timezone_set('America/Mexico_City');
		global $connect ; 
		$data =  $admin["Id"] ; 
		$fecha = date('l jS \of F Y h:i:s A') ; 
		$query  = "INSERT  INTO Reporte (Admin,Matricula,Fecha) VALUES ('{$data}','{$quien}','{$fecha}')" ;  
		$sql = mysqli_query($connect,$query)  ; 
		return $sql ; 
	}

	function getReporte($mtrl){
		global $connect ; 
		$tabla = "<table  borde='1'  class='tablaRegistros'  >  
					<tr class='one'>
						<td>Admin</td>
						<td>Fecha</td>
						<td>Matricula</td>
					</tr>
		" ;  
		
		$query  = "SELECT * FROM  Reporte WHERE  Matricula = '{$mtrl}'" ;
		$info = mysqli_query($connect,$query) ; 
		if($info){
		
		$cont   = 1 ;
		while($row  =  mysqli_fetch_array($info)){
			$stl =  $cont % 2  ==  0 ? "background:rgba(0,0,0,0.5); color:white;" :  "background:white;" ;
			$admin = getDataUser("user".$row["Admin"]) ; 
			$tabla  .=  "
					<tr style='{$stl}'>
						<td>{$admin["Nombre"]}</td>
						<td>{$row['Fecha']}</td>
						<td>{$row['Matricula']}</td>
					</tr>" ;
					$cont += 1 ;

		}
		$tabla .= "</table>" ;

		return $tabla  ; 

		}}

	

	
?>