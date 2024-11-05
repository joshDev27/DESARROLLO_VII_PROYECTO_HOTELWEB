
<?php

include  'C:/laragon/www/DESARROLLO_VII_PROYECTO_HOTELWEB/app/controller/user_controller/controller.php';
//include '../app/controller/user_controller/controller.php';

// print_r(iniciarSesion("jdoe", "password123"));
// die();
// Llamar a la función iniciarSesion
// $result = iniciarSesion('jdoe', 'password123');
// if ($result) {
//     print_r($result); // Muestra el resultado si la función se ejecuta correctamente
// } else {
//     echo "Error al iniciar sesión.";
// }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['userName']) && isset($_POST['password'])) {

        // iniciarSesion("jdoe", "password123");
        $codigoRetorno = iniciarSesion($_POST['userName'], $_POST['password']);
        print_r($codigoRetorno);


        die();

        if ($codigoRetorno == 1503) {
            $_SESSION['usuario'] = $correo;
            $_SESSION['rol'] = $rol;

            // Redirigir a la página correspondiente según el rol

        } else {
            echo "Credenciales incorrectas.";
        }
    }
}
?>
