<?php

//include_once 'C:/laragon/www/DESARROLLO_VII_PROYECTO_HOTELWEB/database/conection/ConexionDba.php';

function iniciarSesion($usuario, $contrasena)
{
    global $conn;
    /*
Fatal error: Uncaught Error: Call to a member function query() on null in
 C:\laragon\www\DESARROLLO_VII_PROYECTO_HOTELWEB\app\controller
 \user_controller\controller.php:10 Stack trace: #0 
 C:\laragon\www\DESARROLLO_VII_PROYECTO_HOTELWEB\src\login.php(23): 
 iniciarSesion('jdoe', 'UIHBOHIOJO') #1 {main} thrown in 
 C:\laragon\www\DESARROLLO_VII_PROYECTO_HOTELWEB\app\controller\user_controller\controller.php on line 10*/
    // Definir cada variable de usuario en una línea separada
    $conn->query("SET @salida1 = '';");
    $conn->query("SET @salida2 = '';");

    // Preparar y ejecutar el procedimiento almacenado con variables de usuario
    $stmt = $conn->prepare("CALL 01_hotel_dba_sp_login(?, ?, @salida1, @salida2)");
    if ($stmt) {
        // Enlazar los parámetros de entrada
        $stmt->bind_param("ss", $usuario, $contrasena);
        $stmt->execute();
        $stmt->close();

        // Obtener los valores de las variables de salida
        $result = $conn->query("SELECT @salida1 AS salida1, @salida2 AS salida2");
        if ($result) {
            $salidas = $result->fetch_assoc();
            return $salidas; // Retornar los valores de salida
        } else {
            echo "Error al obtener los resultados de salida.<br>";
        }
    } else {
        echo "Error al preparar la consulta: " . $conn->error;
    }
    $conn->close();

    return null;
}

function registroUsuario($us_id_Rol=1, $usuario, $nombre, $apellido, $telefono, $contrasena, $correo, $direccion)
{
    global $conn;

    // Inicializar la variable de salida
    $sesion = 0;

    // Preparar y ejecutar el procedimiento almacenado
    if ($stmt = $conn->prepare("CALL 02_hotel_dba_sp_registro(?,?, ?, ?, ?, ?, ?, ?, @sesion)")) {
        // Vincular los parámetros (correspondencia entre tipos y cantidad)
        $stmt->bind_param("isssssss", $us_id_Rol, $usuario, $nombre, $apellido, $telefono, $contrasena, $correo, $direccion);

        // Ejecutar el procedimiento
        if ($stmt->execute()) {
            $stmt->close();

            // Obtener el valor de la variable de salida
            $result = $conn->query("SELECT @sesion AS sesion");
            if ($result) {
                $salidas = $result->fetch_assoc();
                return $salidas; // Retornar los valores de salida
            } else {
                echo "Error al obtener los resultados de salida.<br>";
            }
        } else {
            echo "Error al ejecutar el procedimiento: " . $stmt->error;
        }
    } else {
        echo "Error al preparar la consulta: " . $conn->error;
    }
    $conn->close();

    return null;
}



// $resultado = registroUsuario(11,'jfray','jorshua', 'FRAY',  '9876543210','contrasena','naelfray@gmail.com','456 Calle Secundaria');
// //Llamada a la función y prueba

// $resultado = iniciarSesion("jdoe", "password123");
// print_r($resultado);

//print_r($resultado); // Imprimir el resultado de la variable de salida


// Cerrar conexión

//$conn->close();
