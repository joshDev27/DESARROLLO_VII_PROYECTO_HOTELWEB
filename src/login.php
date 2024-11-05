<?php
include  'C:/laragon/www/DESARROLLO_VII_PROYECTO_HOTELWEB/app/controller/user_controller/controller.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$resultado = iniciarSesion("jdoe", "password123");
print_r($resultado);

die("ddddd");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['userName']) && isset($_POST['password'])) {


        $_SESSION['isAdmin'] = true;
        header("Location: http://localhost/DESARROLLO_VII_PROYECTO_HOTELWEB/index.php");
        exit();
    }
}
?>
