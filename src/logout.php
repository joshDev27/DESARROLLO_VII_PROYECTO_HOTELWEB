<?php
session_start();
session_unset(); // Destruir todas las variables de sesión
session_destroy();
header("Location: http://localhost/DESARROLLO_VII_PROYECTO_HOTELWEB/index.php");
exit();
?>
