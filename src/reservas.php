<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errores = [];
    $datos = [];

    // Procesar y validar cada campo
    $campos = [
        'checkIn',
        'checkOut',
        'firstName',
        'lastName',
        'email',
        'phoneNumber',
        'roomType',
        'cantRoom',
        'cantAdults',
        'cantTeen',
        'cantChild',
        'numNoches'
    ];
    $numNoches = 0;
    foreach ($campos as $campo) {
        if (isset($_POST[$campo])) {
            $valor = $_POST[$campo];
            $datos[$campo] = $valor;
        }
    }
    $datos['numNoches'] = $datos['chechOut'] - $datos['chechIn'];
    print_r($datos);
    die();
}
