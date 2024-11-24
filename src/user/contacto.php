<?php

require_once 'correo.php';
require_once dirname(__DIR__, 2) . '/app/controller/user_controller.php';
include '../function.php';

$userController = new  UserController();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datos = array();

    // Procesar y validar cada campo
    $campos = ['firstName', 'lastName', 'email', 'mensaje'];
    foreach ($campos as $campo) {
        if (isset($_POST[$campo])) {
            $datos[$campo] = $_POST[$campo];
        }
    }

    $para = $datos['email'];
    $asunto = 'Solicitud de Contacto';
    $userController->registrarConsulta(
        $datos['firstName'],
        $datos['lastName'],
        '',
        $datos['email'],
        $asunto,
        '',
        $datos['mensaje']
    );
    ob_start();
    include 'contacto_email.php';
    $html = ob_get_clean();
    EnviarCorreo($para, $asunto, $html);
}
