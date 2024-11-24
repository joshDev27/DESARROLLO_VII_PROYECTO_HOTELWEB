<?php
require_once dirname(__DIR__, 2) . '/app/controller/user_controller.php';
include_once dirname(__DIR__, 2) . '/src/function.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$userController = new  UserController();


// $array_user = $userController->obtenerTotales($userId, 6);
// echo '<pre>';
// echo 'ID de Usuario '.$_SESSION['idUsuario'] .'<br>';
// print_r($array_user[0]);

// echo "JsON";
// $jsonData = json_encode($array_user[0]);
// print_r($jsonData);
// echo '</pre>';
// die();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST['action']) && $_POST['action'] === 'getPerfilUser') {
        $array_user = $userController->obtenerTotales($userId, 6);
        $userId = $_SESSION['idUsuario']; // Asegúrate de obtener el ID de usuario

        var_dump($array_user); // Para ver qué devuelve

        // if (empty($array_user) || empty($array_user[0])) {
        //     echo json_encode(["error" => "No se encontraron datos"]);
        // } else {
        //     echo json_encode($array_user[0]);
        // }
        exit;
    }
    if (isset($_POST['action']) && $_POST['action'] === 'updatePerfilUser') {
        $userId = $_SESSION['idUsuario']; // Asegúrate de obtener el ID de usuario

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['email'];
        $direccion = $_POST['direccion'];
        $contrasena = '';
        //$userController->actualizarUsuario($userId, $usuario, $rol, $nombre, $apellido, $telefono, $contrasena, $correo, $direccion);
    }
    if (isset($_POST['action']) && $_POST['action'] === 'changePerfilUser') {
        $userId = $_SESSION['idUsuario']; // Asegúrate de obtener el ID de usuario

        $contrasena = '';
        // $userController->actualizarUsuario($userId, $usuario, $rol, $nombre, $apellido, $telefono, $contrasena, $correo, $direccion);
    }
}
