# Control Escolar de bachillerato cecytem 2022 

## Contenido 
- [Base de Datos](#base-de-datos) 
- [Enlace  a la base de datos desde  PHP](#enlace-a-la-base-de-datos-desde-php) 
- [Sistema de incicio de sesion](#sistema-de-incio-de-sesion) 
- [Versiones](#versiones)


## Base de Datos 
- BASE DE DATOS USADA 
	- MYSQL 
- BASE DE DATOS COMPLETA 
```sql
	CREATE DATABASE Bachilleratos ;	
	USE  Bachilleratos ; 
	CREATE TABLE Opciones (
		Id INT NOT  NULL  AUTO_INCREMENT , 
		Bachilerato VARCHAR(50) NOT NULL ,
		Cantidad  INT  NOT NULL  , 
		PRIMARY KEY(Id)	
	) ; 

```

## Enlace a la Base de datos desde PHP
```php
	<?php 
		$conexion = mysqli_connect('localhost' , 'root' , 'Pa$$w0rd' , 'Bachilleratos' ) ;
	?>
```

## Sistema de incio de sesion 


## Versiones 
- PHP 7.0.33-0ubuntu0.16.04.16
- mysql  Ver 14.14 Distrib 5.7.33
