use  hotel;
-------------------------------------------
-- CREADO POR : JORSHUA FRAY             --
-------------------------------------------
--TSP PARA REGISTRO DE USUARIO           --
-------------------------------------------

DELIMITER //

CREATE PROCEDURE 02_hotel_dba_sp_registro (
    IN  us_id_Rol  INT,
    IN  usuario    VARCHAR(30),
    IN  nombre     VARCHAR(30),
    IN  apellido   VARCHAR(30),
    IN  telefono   varchar(30),
    IN  contrasena varchar(255),
    IN  correo     varchar(100),
    IN  direccion  varchar(255),
    OUT sesion     int
    
)
BEGIN 
    IF NOT EXISTS (SELECT 1 FROM USUARIO 
               WHERE us_usuario = usuario) 
    THEN
        INSERT INTO USUARIO(us_id_rol    ,us_usuario,us_nombre,
		                    us_apellido  ,us_telefono,
							us_contrasena,us_correo,
						    us_direccion )
			VALUES(us_id_Rol , usuario    , nombre  , apellido,
			       telefono  , contrasena ,  correo , direccion  );
   
    ELSE
        SET sesion = 0102; 
    END IF;
END //

DELIMITER ;