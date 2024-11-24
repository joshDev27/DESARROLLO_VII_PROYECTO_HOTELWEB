<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';
require_once dirname(__DIR__, 2) . '/config.php';

/*
EMAIL_PASS=fqwx xnkx aexl hxss
EMAIL_SENDER=e3761144@gmail.com
EMAIL_HOST=smtp.gmail.com
*/


function EnviarCorreo($para, $asunto, $html, $test = false)
{

    $mail = new PHPMailer(true);
    if ($test) {
        $mail->SMTPDebug = 2; // O 3 para más detalles
        $mail->Debugoutput = 'html'; // O 'error_log' para enviar la salida a un log
    }
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'e3761144@gmail.com';
        $mail->Password = 'fqwx xnkx aexl hxss'; // Usa una contraseña de aplicación
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // Puerto TCP para SSL

        $mail->setFrom('e3761144@gmail.com', 'Sistema de Reservas  no-replay');
        $mail->addAddress($para);

        $mail->isHTML(true);
        $mail->Subject = $asunto;
        $mail->Body = $html;

        $mail->send();
    } catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo} <br>";
        echo "Error al enviar el mensaje: $e <br>";
        die();
    }
    header("Location: ../../index.php");
    exit();
}
