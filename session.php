<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/session.css">
    <title>Log in </title>
</head>
<body>
    <div class="all">
        <img src="static/img/logo.jpeg" alt="" 
            style="
            position: absolute;
	        z-index: -1; 
	        filter: blur(8px);
	        width: 70%;"
        >
        <form action="php/registro.php" method="post"> 

            <span 
                style="text-align:center; 
                        font-size:20px  ;"
            >
                Sing  in 
        
            </span>
            <input type="text" name="user" id="" placeholder="Usuario" require >
            <input type="password" name="pass" placeholder="Contraseña" id="" require>
           
            <div
                style=
                "text-align:center;"
            >
            <input type="submit" value="Iniciar" name="inicio" 
                style=
                "--color:white; --color-fondo:#229954;"
            >   
            <input type="reset" value="Cancelar" name="cancelar"
                style=
                "--color:white; --color-fondo:#D35400;"
            
            >


            </div>
            
        </form>

    </div>
</body>
</html>