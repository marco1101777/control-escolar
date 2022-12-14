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





-- Proximamente

CREATE TABLE  Usuarios (
	Id  INT  NOT  NULL  AUTO_INCREMENT , 
	Usuario TEXT NOT NULL  , 
	Password  TEXT NOT NULL , 
	Roll  TEXT NOT NULL  , -- roles admitidos (Admin) 
	PRIMARY KEY(Id)
) ; 



INSERT  INTO  Usuarios (Usuario,Password,Roll) VALUES 
("root","root777" , "Admin"); 


SELECT  COUNT(*) FROM Alumnos WHEN Bachillerato = "Fisico-Matematico"  &&  Numero_grupo =  1 ; -- return cuantos de un  $bachillerato esten en el grupo 1  





