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
USE Bachilleratos  ;
CREATE TABLE Alumnos(
	Numero_Control TEXT  NOT NULL  , 
	Nombre  TEXT NOT NULL ,  
	Apellido_paterno TEXT NOT NULL , 
	Apellido_materno TEXT NOT NULL ,
	Grupo TEXT  NOT NULL , 
	Bachillerato TEXT NOT NULL ,
	Numero_grupo TEXT NOT  NULL   -- grupos A OR B   
); 



CREATE TABLE  Usuarios (
	Id  INT  NOT  NULL  AUTO_INCREMENT , 
	Usuario TEXT NOT NULL  , 
	Password  TEXT NOT NULL , 
	Roll  TEXT NOT NULL  , -- roles admitidos (Admin) 
	PRIMARY KEY(Id)
) ; 


```

## Enlace a la Base de datos desde PHP
Esta basado en un sistema de gestor archivos en PHP 
con una conexion basica para el manejo de la base de datos SQL  (MYSQL)
```php
	<?php 
		$conexion = mysqli_connect('localhost' , 'root' , 'Pa$$w0rd' , 'Bachilleratos' ) ;
	?>
```

## Sistema de incio de sesion
Añadido recientemente el sistema de gestor de  inicion de  session se espera que llene reportes de ingreso de datos


## Versiones
- PHP 7.0.33-0ubuntu0.16.04.16
- mysql  Ver 14.14 Distrib 5.7.33
- Editor Visual Estudio  Code