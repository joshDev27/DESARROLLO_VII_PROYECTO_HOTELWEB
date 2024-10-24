<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/Style.css">
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
        </div>
        <div class="footer">
            <p>&copy; 2024 Tu Hotel. Todos los derechos reservados.</p>
        </div>
    </div>
</body>

</html>