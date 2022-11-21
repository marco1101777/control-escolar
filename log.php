<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="static/css/login.css">
	<title>Session</title>
</head>
<body>
	<div class="all">
		<div class="login"  id="log">

			<form action="">
				<span style="color: rgb(0, 128, 128);">INICIAR  SESION</span>
				<input type="text" name="usuario" id="" placeholder="Usuario">
				<div class="cont">
					<input type="password" name="pass" id="ps" placeholder="Contrase&ntilde;a">
					<button type='button' id="password">
						<img src="static/img/ojo.svg" alt="ver">
					</button>
				</div>
				<div class="opc">
					<button type="submit"  id="btn_opc" style="--fondo:rgb(0, 139, 139);">
						Iniciar
					</button>
					<button type="reset"  id="btn_opc" style="--fondo:rgb(199, 0, 57);">Cancelar</button>
				</div>
				<a href="#registrarse" id="btn_registro">Registro</a>
			</form>

		</div>	
		<div class="register" id="reg" style="display: none;">
			<form action="">
				<span style="color: rgb(0, 128, 128);">REGISTRO</span>

				<input type="text" name="Nombre" id="" placeholder="Nombre" checked>
				<input type="text" name="Ap" id="" placeholder="Apellido Paterno">
				<input type="text" name="Am" id="" placeholder="Apellido Materno">
				<label for="">
					<span class='lb'>Grupo</span>		
					<select name="" id="grupo">
						<option value="">Escoge un grupo</option>
						<option value="502A">502-A</option>
						<option value="502B">502-B</option>
						<option value="522A">502-A</option>
						<option value="522B">502-B</option>
						<option value="530A">530-A</option>
						<option value="530B">530-B</option>
					</select>	
				</label>
				
				
				<label for="">
					<span class='lb'>Bachillerato</span>		
				<select name="bachillerato" id="bh">
					<option value="">Escoge un Grupo </option>

				</select>	
			</label>
				<input type="text" name="Usuario" id="" placeholder="Nombre de Usuario">
				<div class="opc">
					<button type="submit"  id="btn_opc" style="--fondo:rgb(0, 139, 139);">
						Enviar
					</button>
					<button type="reset"  id="btn_opc" style="--fondo:rgb(199, 0, 57);">Cancelar</button>
				</div>
								<a href="#" id="btn_registro">Iniciar sesion</a>


			</form>
			
		</div>

	</div>
	<script type="text/javascript" src="static/js/login.js"></script>
</body>
</html>