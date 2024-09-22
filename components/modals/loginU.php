<?php
session_start();
include 'globals.php'; // Archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Llamar al procedimiento almacenado para autenticar al usuario
    $stmt = $mysqli->prepare("CALL Login_Usuario(?, ?, @o_retorno, @o_Id_Rol)");
    $stmt->bind_param("ss", $correo, $contrasena);
    $stmt->execute();

    $result = $mysqli->query("SELECT @o_retorno AS retorno, @o_Id_Rol AS rol");
    $row = $result->fetch_assoc();
    $codigoRetorno = $row['retorno'];
    $rol = $row['rol'];

    if ($codigoRetorno == 1503) {
        $_SESSION['usuario'] = $correo;
        $_SESSION['rol'] = $rol;

        // Redirigir a la página correspondiente según el rol
        if ($rol == 1) {
            header("");
        } elseif ($rol == 2) {
            header("");
        } 
    } else {
        echo "Credenciales incorrectas.";
    }
}
?>
