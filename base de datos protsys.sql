CREATE DATABASE protsys;
USE protsys;
CREATE TABLE cliente(
nit VARCHAR(20),
razonsocial VARCHAR(20),
direccion VARCHAR(50),
telefono BIGINT,
email VARCHAR(100),
PRIMARY KEY(nit));

SHOW TABLES;

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

CREATE TABLE entregado(
PT VARCHAR(2),
UltimaFecha VARCHAR(10),
FechaIngreso VARCHAR(10),
PRIMARY KEY(PT));

CREATE TABLE cancelados(
PT VARCHAR(2),
RazonCancelacion VARCHAR(10),
UltimaFecha VARCHAR(10),
FechaIngreso VARCHAR(10),
PRIMARY KEY(PT));






