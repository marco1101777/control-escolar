<?php 
	function go($url){
		echo "
			<script > 
				window.location.assign('$url') ;
			</script>";
	}	  

	function renderFormUpdate($datos ){
		$html = "<!DOCTYPE html>
<html lang='es'>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel='stylesheet' href='../static/css/login.css'>
	<title>Session</title>
</head>
<body>
	<div class='noti' id='notificacion'></div>
	<div class='charget' id='charget' style='display: none;'></div>
	<div class='all'>
		<div class='register' id='reg' style='display: flex;'>
			<form action='update.php' id='registro' method = 'post'>
				<span style='color: rgb(0, 128, 128);'>REGISTRO</span>

			<input type='text' name='numero_control' placeholder='Numero Control' id='numeroControl' value='{$datos['Numero_Control']}'>
				<input type='text' name='Nombre' id='Nombre' placeholder='Nombre' checked value='{$datos['Nombre']}'>
				<input type='text' name='Apellido_paterno' id='Apellido_paterno' placeholder='Apellido Paterno' value='{$datos['Apellido_paterno']}'>
				<input type='text' name='Apellido_materno' id='Apellido_materno' placeholder='Apellido Materno' value='{$datos['Apellido_materno']}'>

				<input type='text' name='NoGrupo' id='NoGrupo' placeholder='Numero_grupo' value='{$datos['Numero_grupo']}'>
				<label >
					<span class='lb'>Grupo</span>		
					<select name='grupo' id='grupo'>
						<option value='{$datos['Grupo']}'>{$datos['Grupo']}</option>
						<option value='602A'>602A</option>
						<option value='602B'>602B</option>
						<option value='622A'>602A</option>
						<option value='622B'>602B</option>
						<option value='630A'>630A</option>
						<option value='630B'>630B</option>
					</select>	
				</label>
				
				
				<label >
					<span class='lb'>Bachillerato</span>		
				<select name='bachillerato' id='bh'>
					<option value='Fisico-Matematico'>Fisico-Matematico</option>
					<option value=''>{$datos['Bachillerato']}</option>
					<option value='Economico-Administrativo'>Economico-Administrativo</option>
					<option value='Quimico-Biologo'>Quimico-Biologo</option>

				</select>	
			</label>
				
				<div class='opc'>
					<button type='submit'  id='btn_opc' style='--fondo:rgb(0, 139, 139);' name='registro' >
						Actualizar
					</button>
					<button type='reset'  id='btn_opc' style='--fondo:rgb(199, 0, 57);'>Cancelar</button>
				</div>
								<!-- <a href='#' id='btn_registro'>Iniciar sesion</a> -->


			</form>
			
		</div>

	</div>
	</div>
</body>
</html>" ;

		return $html ;

	}
?>
