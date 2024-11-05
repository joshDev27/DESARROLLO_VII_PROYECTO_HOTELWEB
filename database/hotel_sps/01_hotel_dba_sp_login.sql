use  hotel;
-------------------------------------------
-- CREADO POR : JORSHUA FRAY             --
-------------------------------------------
--SP PARA REGISTRO DE LOGINNNN           --
-------------------------------------------
DELIMITER //

CREATE PROCEDURE 01_hotel_dba_sp_login (
    IN  usuario    VARCHAR(255),
    IN  contrasena VARCHAR(255),
    OUT sesion     INT,
    OUT loginsis   BOOLEAN
)
BEGIN 
    DECLARE rol INT;

    SET usuario = IFNULL(usuario, ''), contrasena = IFNULL(contrasena, '');

    IF usuario = '' OR contrasena = '' THEN
        SET loginsis = FALSE;
        SET sesion = 101;  -- O un valor de error apropiado
    END IF;

    IF EXISTS (SELECT 1 FROM USUARIO
               WHERE us_usuario = usuario 
               AND us_contrasena = contrasena) 
    THEN
        SELECT us_id_rol INTO rol FROM USUARIO
        WHERE us_usuario = usuario;
        
        SET loginsis = TRUE;
        SET sesion = rol;  -- Usa la variable rol aquí
    ELSE
        SET loginsis = FALSE;
        SET sesion = 102; 
    END IF;
END //

DELIMITER ;
