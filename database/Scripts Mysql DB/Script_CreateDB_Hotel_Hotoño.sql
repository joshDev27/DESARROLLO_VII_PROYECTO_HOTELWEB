
#CREACION DE LA BASE DE DATOS
CREATE DATABASE hotel_hotoño;
use hotel_hotoño;


#CREACION DE LA TABLA EN DEFINICIONES DE ROLES
CREATE TABLE ROL (
Id_Rol   int auto_increment primary key,
Desc_Rol varchar (5) not null
);

#CREACION DE LA TABLA USUARIOS
CREATE TABLE USUARIO (

Id_Usuario int auto_increment primary key,
Id_Rol     int          not null,
Nombre     varchar(30)  not null,
Apellido   varchar(30)  not null,
Telefono   varchar(30)  not null,
contrasena varchar(255) not null,
correo     varchar(100) not null,
Direccion  varchar(255),
Unique (correo)
);

#RELACION ENTRE ROL Y USUARIO
CREATE TABLE USUARIO_ROL (
    Id_usuario INT,
    Id_rol     INT,
    PRIMARY KEY (Id_usuario, Id_rol),               
    FOREIGN KEY (Id_usuario) REFERENCES USUARIO(Id_Usuario) ON DELETE CASCADE, 
    FOREIGN KEY (Id_rol) REFERENCES ROL(Id_Rol) ON DELETE CASCADE          
);

#CREACION RESERVA
CREATE TABLE RESERVA (
Id_Reserva      int auto_increment primary key ,
Id_Usuario      int,
Fecha_checkin   date,
Fecha_checkout  date,
Num_noches      int,
Fecha_reserva   date,
cant_habitacion int,
Estado          varchar(5),
FOREIGN KEY (Id_Usuario) REFERENCES USUARIO(Id_Usuario) ON DELETE CASCADE
);

#CREACION DE LA TIPO HABITACION
CREATE TABLE TIPO_HABITACION (
id_tipo         int auto_increment primary key,
Desc_habitacion varchar(255),
Precio          decimal,
Disponibles     int,
camas           int,
desc_camas      int,
baños           int,
link_imagen     varchar(500)

);

#CREACION DE LA TABLA HABITACION
CREATE TABLE HABITACION (

Id_habitacion int,
Id_reserva    int,
Tipo          int,
Estado        varchar(5),
FOREIGN KEY (Tipo) REFERENCES TIPO_HABITACION(id_tipo)
);

#CREACION DE LA TABLA HABITACION
CREATE TABLE HUESPED(

Cedula      varchar(20),
Nombre      varchar(50),
Apellido    varchar(50),
Edad        int,
Id_Reserva  int,
FOREIGN KEY (Id_Reserva) REFERENCES RESERVA(Id_Reserva) ON DELETE CASCADE
);

#CREACION DE LA TABLA CONSULTAS
CREATE TABLE CONSULTAS(
Id_Consulta int auto_increment primary key,
Nombre      varchar(50),
Apellido    varchar(50),
correo      varchar(50),
Mensaje     varchar(255)

);
















