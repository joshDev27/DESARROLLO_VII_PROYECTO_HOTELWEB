
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<div class="container" id="email-sender">
    <div class="header">
        <h1>Gracias por tu reserva!</h1>
    </div>
    <div class="content">
        <p>Hola, <?php //echo $_SESSION['nombreConsultaCorreo'] ?></p>
        <p>Hemos recibido tu solicitud de reserva de habitacion. Estaremos en contacto contigo pronto para confirmar los detalles de tu reserva.</p>
        <p>Este es un correo automático, por favor, no respondas a este mensaje.</p>
        <p>Gracias por elegir nuestro hotel.</p>
        <p>Atentamente,<br>El equipo de reservas</p>
        <a href="http://localhost/DESARROLLO_VII_PROYECTO_HOTELWEB/confirmarReservas.php?code=<?php echo $array['codigo_verificacion'] ?>"> Confirmar Reserva </a>
        <a href="http://localhost/DESARROLLO_VII_PROYECTO_HOTELWEB/index.php"> Puede Visitar La Pagina </a>
    </div>
    <div class="footer">
        <p>&copy; <?php echo date('Y') ?> <?php //echo SITE_NAME 
                                            ?> Todos los derechos reservados.</p>
    </div>
</div>