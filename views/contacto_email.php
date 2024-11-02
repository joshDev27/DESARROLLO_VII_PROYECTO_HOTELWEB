<html>

<head>
    <link rel="stylesheet" href="../public/assets/css/Email.css">
    <title>Confirmación de Reserva</title>
</head>

<body>
    <div class="container" id="email-sender">
        <div class="header">
            <h1>¡Gracias por tu reserva!</h1>
        </div>
        <div class="content">
            <p>Hola, <?php echo $array['nombre'] . ' ' . $array['apellido'] ?></p>
            <p>Hemos recibido tu solicitud de reserva de habitación. Estaremos en contacto contigo pronto para confirmar los detalles de tu reserva.</p>
            <p>Este es un correo automático, por favor, no respondas a este mensaje.</p>
            <p>Gracias por elegir nuestro hotel.</p>
            <p>Atentamente,<br>El equipo de reservas</p>
            <a href="http://localhost/DESARROLLO_VII_PROYECTO_HOTELWEB/confirmarReservas.php?code=<?php echo $array['codigo_verificacion'] ?>"> Confirmar Reserva </a>
            <a href="http://localhost/DESARROLLO_VII_PROYECTO_HOTELWEB/index.php"> Puede Visitar La Pagina </a>
        </div>
        <div class="footer">
            <p>&copy; <?php echo date('y') ?> <?php echo SITE_NAME ?> Todos los derechos reservados.</p>
        </div>
    </div>
</body>

</html>