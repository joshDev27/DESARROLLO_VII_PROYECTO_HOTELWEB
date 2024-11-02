<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

function EnviarCorreo($para, $asunto, $html, $test = false)
{

    $mail = new PHPMailer(true);
    if ($test) {
        $mail->SMTPDebug = 2; // O 3 para más detalles
        $mail->Debugoutput = 'html'; // O 'error_log' para enviar la salida a un log
    }
    try {
        $mail->isSMTP();
        $mail->Host = EMAIL_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = EMAIL_SENDER;
        $mail->Password = EMAIL_PASS; // Usa una contraseña de aplicación
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // Puerto TCP para SSL

        $mail->setFrom(EMAIL_SENDER, 'Sistema de Prueba de correo no-replay');
        $mail->addAddress($para);

        $mail->isHTML(true);
        $mail->Subject = $asunto;
        $mail->Body = $html;

        $mail->send();
    } catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
        die();
    }
}
