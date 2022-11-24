CREATE DATABASE Bachilleratos  ;
USE Bachilleratos  ;
CREATE TABLE Alumnos(
	Id INT  NOT NULL AUTO_INCREMENT ,
	Nombre  TEXT NOT NULL , 
	Apellido_paterno TEXT NOT NULL , 
	Apellido_materno TEXT NOT NULL ,
	Grupo INT NOT NULL , 
	Bachilerato TEXT NOT NULL ,
	Numero_grupo INT NOT  NULL  ,
	PRIMARY KEY(Id) 
); 



CREATE TABLE  Usuarios (
	Id  INT  NOT  NULL  AUTO_INCREMENT , 
	Usuario TEXT NOT NULL  , 
	Password  TEXT NOT NULL ,
	Roll  TEXT NOT NULL  
) ; 





SELECT  COUNT(*) FROM Alumnos WHEN Bachillerato == "Fisico-Matematico"  AND  Grupo ==  1 ; -- return cuantos de un  $bachillerato esten en el grupo 1  

