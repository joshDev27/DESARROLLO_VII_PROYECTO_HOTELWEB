<?php
//include './config.php';
try {

    // $host = 'junction.proxy.rlwy.net';
    // $usuario = 'root';
    // $contraseña = 'sZUdFDLzZhlOjOlIAbYlyrEYiVjFwkRF';
    // $base_de_datos = 'railway';

    // $conn = new mysqli($host, $usuario, $contraseña, $base_de_datos, 50528);
   
    // var_dump($conn);
    // die();
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    if ($conn->connect_error) {
        throw new Exception("Error de conexión: " . $conn->connect_error);
    }
    else {
       // echo "Conexión exitosa a la base de datos.<br>";
    }
    // var_dump(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    // die();
} catch (Exception $e) {
    echo "Excepción capturada: ",  $e->getMessage(), "\n";
}
