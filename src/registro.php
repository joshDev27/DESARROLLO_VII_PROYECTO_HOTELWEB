<?php
include '../database/conection/ConexionDba.php';
include  '../app/controller/user_controller/controller.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}




// $resultado = registroUsuario(11, 'jopliolhgy', 'gg', 'gg',  'gg', 'contrasena', 'naf7jfttf5@gmail.com', 'gg');

// print_r($resultado);


// $resultado = iniciarSesion("jdoe", "password123");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['userName']) && isset($_POST['password']) && isset($_POST['email'])) {



        $resultado = registroUsuario(2, $_POST['userName'], '', '',  '',  $_POST['password'],  $_POST['email'], '');
        if ($resultado['sesion'] == 102) {
            echo 'Usuario Repetido';
        }
        // $resultado = iniciarSesion("jdoe", "password123");

        die();
        header("Location: http://localhost/DESARROLLO_VII_PROYECTO_HOTELWEB/index.php");
        exit();
    }
}
