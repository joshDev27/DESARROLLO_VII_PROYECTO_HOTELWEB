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
    $con = mysqli_connect('localhost', 'root', '', 'hotel_hotoño');
    if ($con === false) {
        die("ERROR: No se pudo conectar. " . mysqli_connect_error());
    }

    /*
    // Crear una declaración preparada
    $stmt = $con->prepare("INSERT INTO consultas (Nombre, Apellido, correo, Mensaje) VALUES (?, ?, ?, ?)");

    $stmt->bind_param("ssss", $datos['firstName'], $datos['lastName'], $datos['email'], $datos['mensaje']);

    // Ejecutar la declaración
    if (!$stmt->execute()) {
        die("error en guardar los datos en la base de datos.");
    }
    // Cerrar la declaración
    $stmt->close();

    $nombre_plantilla_html  = 'contacto_email.php';
    if (sendEmail($datos, $nombre_plantilla_html)) {
        $alert_message = "Correo enviado exitosamente.";
    } else {
        $alert_message = "Error al enviar el correo.";
    }
        */
}
