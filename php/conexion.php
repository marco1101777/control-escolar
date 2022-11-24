<?php 
	$connect = mysqli_connect('localhost' , 'root'  , 'root'   ) ; 
	// echo $connect  ? "Conexion Buena" : "Salio algo mal" ; 


	function transform_data($data){
		$query = '' ;  
		$max = sizeof($data);
		foreach ($data as $key => $value) {  
			$query .= " '$value' " ; 
			$query .= $max - 1 > $key ? ' , ' : '' ;  
		}
		return $query ; 
	} 

	function insert($data){
		$query =  transform_data($data) ; 
		$insert_data = mysqli_query($query, $connect ) ; 
		return $insert_data  ? true : false ;  
	}


?>