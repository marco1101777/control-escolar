<?php 
	function AorB($grupo){
		$grupo = strtoupper($grupo) ; 
		
		if($grupo[strlen($grupo) - 1] == "B"){
			return  "grupos 2" ;
		}else if($grupo[strlen($grupo) - 1] == "A"){
			return "grupo 1" ; 
		}
	}



?>