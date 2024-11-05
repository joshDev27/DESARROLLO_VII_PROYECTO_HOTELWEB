<?php
//require_once 'C:\laragon\www\PROYECTO\DESARROLLO_VII_PROYECTO_HOTELWEBV2\database\conection\ConexionDba.php';

function editarUsuario($us_id, $usuario, $nombre, $apellido, $telefono, $contrasena, $correo, $direccion){
    global $conn;

    // Inicializar la variable de salida
    $sesion = 0;

    // Preparar y ejecutar el procedimiento almacenado
    if ($stmt = $conn->prepare("CALL 04_hotel_dba_sp_editar_usuario(?,?, ?, ?, ?, ?, ?, ?, @sesion)")) {
        // Vincular los parámetros (correspondencia entre tipos y cantidad)
        $stmt->bind_param("isssssss", $us_id, $usuario, $nombre, $apellido, $telefono, $contrasena, $correo, $direccion);

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
    return null;
}



function eliminarUsuario($id){
    global $conn;

    // Inicializar la variable de salida
    $sesion = 0;

    // Preparar y ejecutar el procedimiento almacenado
    if ($stmt = $conn->prepare("CALL 03_hotel_dba_sp_editar_usuario(?,@sesion)")) {
        // Vincular los parámetros (correspondencia entre tipos y cantidad)
        $stmt->bind_param("isssssss", $id, $usuario, $nombre, $apellido, $telefono, $contrasena, $correo, $direccion);

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
    return null;
}



function gestionHabitacion(){

    //crera habitacion 
    //eliminar habitacion 
    //editar habitacion

}





?>