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

CREATE TABLE  login (
	Id  INT  NOT  NULL  AUTO_INCREMENT , 
	Nombre  TEXT NOT NULL , 	
	user TEXT NOT NULL  , 
	password  TEXT NOT NULL , 
	Roll  TEXT NOT NULL  , -- roles admitidos (Admin,Register) 
	PRIMARY KEY(Id)
) ; 

CREATE  TABLE Reporte (
	Id INT NOT  NULL AUTO_INCREMENT ,
	Admin TEXT NOT NULL , 
	Matricula TEXT NOT NULL , 
	Fecha TEXT NOT NULL , 
	PRIMARY KEY(Id) 
) ; 



INSERT  INTO  login (Nombre,user,password,Roll)  VALUES 
("Marco","root","root","admin"); 

INSERT  INTO  login (Nombre,user,password,Roll)  VALUES 
("Marco Antonio","admin","root","admin"); 







