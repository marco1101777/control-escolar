<?php 
    include("conexion.php"); 
    include("recursos.php");
    // quien ?  realizo el registro 
    if($_GET["admin"]){
       $tbl =  getReporte($_GET["admin"]) ; 
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/tabla.css">
    <title>Document</title>
</head>
<body>
    <div class="all">
        <?php echo $tbl ; ?>

    </div>
	<a href="../index.php" class="back">Home</a>
    
</body>
</html>

