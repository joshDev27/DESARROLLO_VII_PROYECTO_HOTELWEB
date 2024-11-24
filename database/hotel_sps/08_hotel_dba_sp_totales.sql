USE railway;

DELIMITER //

CREATE PROCEDURE 08_hotel_dba_sp_totales(
    IN operacion INT,
    IN id_us INT
)
BEGIN
    -- Variables para almacenar los resultados
    DECLARE total_habitaciones INT;
    DECLARE habitaciones_reservadas INT;
    DECLARE habitaciones_disponibles INT;
    DECLARE total_usuarios INT;
    DECLARE total_huespedes INT;
    DECLARE intervalo_inf DATE;
    DECLARE intervalo_sup DATE;

    -- Operación 1: Resumen de datos generales
    IF operacion = 1 THEN
        -- Total de habitaciones
        SELECT SUM(th_total) INTO total_habitaciones
        FROM TIPO_HABITACION;

        -- Habitaciones reservadas (total - disponibles)
        SELECT SUM(th_total) - SUM(th_disponibles) INTO habitaciones_reservadas
        FROM TIPO_HABITACION;

        -- Habitaciones disponibles
        SELECT SUM(th_disponibles) INTO habitaciones_disponibles
        FROM TIPO_HABITACION;

        -- Total de usuarios
        SELECT COUNT(*) INTO total_usuarios
        FROM USUARIO;

        -- Total de huéspedes
        SELECT COUNT(*) INTO total_huespedes
        FROM HUESPED;

        -- Resultado
        SELECT total_habitaciones AS TOTAL_HABITACIONES,
               habitaciones_reservadas AS HABITACIONES_RESERVADAS,
               habitaciones_disponibles AS HABITACIONES_DISPONIBLES,
               total_usuarios AS TOTAL_USUARIOS,
               total_huespedes AS TOTAL_HUESPEDES;
    END IF;

    -- Operación 2: Consultar reservas de un usuario específico
    IF operacion = 2 THEN
        SELECT * 
        FROM RESERVA
        WHERE re_id_usuario = id_us;
    END IF;

    -- Operación 3: Mostrar todos los usuarios
    IF operacion = 3 THEN
        SELECT * 
        FROM USUARIO;
    END IF;

    -- Operación 4: Mostrar descripciones de roles
    IF operacion = 4 THEN
        SELECT rl_desc_Rol 
        FROM ROL;
    END IF;

    -- Operación 5: Usuarios con sus roles
    IF operacion = 5 THEN
        SELECT * 
        FROM USUARIO, ROL
        WHERE us_id_usuario = rl_id_rol
          AND ud_id_Usuario = id_us;
    END IF;

    -- Operación 6: Detalles de usuarios
    IF operacion = 6 THEN
        SELECT * 
        FROM USUARIO
        WHERE ud_id_Usuario = id_us;
    END IF;

    -- Operación 7: Reservas y usuarios relacionados
    IF operacion = 7 THEN
        SELECT * 
        FROM RESERVA, USUARIO
        WHERE us_id_usuario = re_id_usuario
          AND ud_id_Usuario = id_us;
    END IF;

    -- Operación 8: Reservas, usuarios y habitaciones relacionadas
    IF operacion = 8 THEN
        SELECT * 
        FROM RESERVA, USUARIO, HABITACION,HUESPED
        WHERE us_id_usuario = re_id_usuario
          AND hu_id_reserva = re_id_reserva
          AND ha_id_reserva = re_id_reserva
          AND us_id_usuario = 2;
    END IF;

    -- Operación 9: Reservas en las últimas 24 horas
    IF operacion = 9 THEN
        SET intervalo_inf = DATE_ADD(CURDATE(), INTERVAL -1 DAY);
        SET intervalo_sup = CURDATE();
        SELECT * 
        FROM RESERVA
        WHERE re_fecha_reserva BETWEEN intervalo_inf AND intervalo_sup;
    END IF;
    
    
        -- Operación 9: Reservas en las últimas 24 horas
    IF operacion = 10 THEN
	SELECT * FROM TIPO_HABITACION;
    END IF;

    IF operacion = 11 THEN
        SELECT * 
        FROM RESERVA;
    END IF;

END //

DELIMITER ;

