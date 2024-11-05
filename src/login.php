<?php
include '../database/conection/ConexionDba.php';
include  '../app/controller/user_controller/controller.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['userName']) && isset($_POST['password'])) {

        $resultado = iniciarSesion($_POST['userName'], $_POST['password']);

        if ($resultado['validacion'] == 1) {
            if ($resultado['rol'] == 1) {
                $_SESSION['idUsuario'] = $resultado['idUsuario'];
                $_SESSION['isAdmin'] = true;

            }else{
                echo 'rol de usuario'.$resultado['rol'];
            }
        }else{
            echo'validacion de usuario'. $resultado['validacion'];
        }
        header("Location: http://localhost/DESARROLLO_VII_PROYECTO_HOTELWEB/index.php");
        exit();
    }
}
