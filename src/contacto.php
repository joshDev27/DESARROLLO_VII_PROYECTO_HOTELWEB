<?php

function sendEmail($array, $plantilla)
{
    $html = file_get_contents('../views/' . $plantilla);
    $to = $array['email'];
    $subject = "Solicitud de Contacto Para Reservas";
    $message = html_entity_decode($html);

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <leandro12rk@gmail.com>' . "\r\n";

    return mail($to, $subject, $message, $headers);
}

$alert_message;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datos = array();

    // Procesar y validar cada campo
    $campos = ['firstName', 'lastName', 'email', 'mensaje'];
    foreach ($campos as $campo) {
        if (isset($_POST[$campo])) {
            $datos[$campo] = $_POST[$campo];
        }
    }

    $con = mysqli_connect('localhost', 'root', '', 'hotel_hotoño');
    if ($con === false) {
        die("ERROR: No se pudo conectar. " . mysqli_connect_error());
    }
    // Crear una declaración preparada
    $stmt = $con->prepare("INSERT INTO consultas (Nombre, Apellido, correo, Mensaje) VALUES (?, ?, ?, ?)");

    $stmt->bind_param("ssss", $datos['firstName'], $datos['lastName'], $datos['email'], $datos['mensaje']);

    // Ejecutar la declaración
    // if (!$stmt->execute()) {
    //     die("error en guardar los datos en la base de datos.");
    // }
    // Cerrar la declaración
    $stmt->close();

    $nombre_plantilla_html  = 'contacto_email.php';
    if (sendEmail($datos, $nombre_plantilla_html)) {
        $alert_message = "Correo enviado exitosamente.";
    } else {
        $alert_message = "Error al enviar el correo.";
    }
}
