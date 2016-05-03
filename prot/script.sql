create database protsys;

create table cliente(
nit varchar(20),
razonsocial varchar(20),
direccion varchar(50),
telefono bigint,
email varchar(100),
primary key(nit));

CREATE DATABASE servicios;
SHOW DATABASES;
USE servicios;
CREATE TABLE seguimiento(
PT VARCHAR(2),
PM VARCHAR(2),
DocFisico VARCHAR(4),
NIT BIGINT,
Clientes VARCHAR(50),
Descripcion VARCHAR(100),
Estado VARCHAR(50),
FechaSolicitud VARCHAR(20),
FechaIngreso VARCHAR(20),
ActualizacionServicio VARCHAR(30),
TareaAsistencial VARCHAR(40),
FechaCumplimiento VARCHAR(20),
PersonalApoyo VARCHAR(15),
Contacto VARCHAR(20),
FechaAprobacion VARCHAR(15),
TecnicoEncargado VARCHAR(20),
Presupuesto VARCHAR(10),
CotizacionAntesIVA VARCHAR(15),
PRIMARY KEY(PT));

SELECT * FROM seguimiento;

CREATE TABLE entregado(
PT VARCHAR(2),
UltimaFecha VARCHAR(10),
FechaIngreso VARCHAR(10),
PRIMARY KEY(PT));

SELECT * FROM entregado;

CREATE TABLE cancelados(
PT VARCHAR(2),
RazonCancelacion VARCHAR(10),
UltimaFecha VARCHAR(10),
FechaIngreso VARCHAR(10),
PRIMARY KEY(PT));

SELECT * FROM cancelados;

