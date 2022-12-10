<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="static/css/login.css">
	<title>Session</title>
</head>
<body>
	<div class="noti" id='notificacion'></div>
	<div class="charget" id="charget" style="display: none;"></div>
	<div class="all">
		<img src="static/img/logo.jpeg" alt="" class="fondo">
		<div class="login" style="display: none ;"  id="log">

			<form action="php/registro.php" id="sesion" method="POST">
				<span style="color: rgb(0, 128, 128);">INICIAR  SESION</span>
				<input type="text" name="usuario" id="" placeholder="Usuario">
				<div class="cont">
					<input type="password" name="pass" id="ps" placeholder="Contrase&ntilde;a">
					<button type='button' id="password">
						<img src="static/img/ojo.svg" alt="ver">
					</button>
				</div>
				<div class="opc">
					<button type="submit"  id="btn_opc" style="--fondo:rgb(0, 139, 139);" name="inicio">
						Iniciar
					</button>
					<button type="reset"  id="btn_opc" style="--fondo:rgb(199, 0, 57);">Cancelar</button>
				</div>
				<a href="#registrarse" id="btn_registro">Registro</a>
			</form>

		</div>	
		<div class="register" id="reg" style="display: flex;">
			<form action="" id="registro">
				<span style="color: rgb(0, 128, 128);">REGISTRO</span>
			
			<input type="text" name="numero_control" placeholder="Numero Control" id="numeroControl">
				<input type="text" name="Nombre" id="Nombre" placeholder="Nombre" checked>
				<input type="text" name="Apellido_paterno" id="Apellido_paterno" placeholder="Apellido Paterno">
				<input type="text" name="Apellido_materno" id="Apellido_materno" placeholder="Apellido Materno">
				<label for="">
					<span class='lb'>Grupo</span>		
					<select name="grupo" id="grupo" >
						<option value="">Escoge  tu grupo</option>
						<option value="602A">602A</option>
						<option value="602B">602B</option>
						<option value="622A">602A</option>
						<option value="622B">602B</option>
						<option value="630A">630A</option>
						<option value="630B">630B</option>
					</select>	
				</label>
				
				
				<label for="">
					<span class='lb'>Bachillerato</span>		
				<select name="bachillerato" id="bh">
					<option value="">Escoge un Grupo </option>

				</select>	
			</label>
				
				<div class="opc">
					<button type="submit"  id="btn_opc" style="--fondo:rgb(0, 139, 139);" name="registro" >
						Enviar
					</button>
					<button type="reset"  id="btn_opc" style="--fondo:rgb(199, 0, 57);">Cancelar</button>
				</div>
								<!-- <a href="#" id="btn_registro">Iniciar sesion</a> -->
								<a href="tablaAlumnos.php" >Registros</a>


			</form>
			
		</div>

	</div>
	<script type="text/javascript" src="static/js/grupos.js"></script>
	<script type="text/javascript" src="static/js/login.js"></script>
</body>
</html>