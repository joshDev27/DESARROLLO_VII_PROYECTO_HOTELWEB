
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $datos = [];

    // Procesar y validar cada campo
    $campos = [
        'userName',
        'password'
    ];

    foreach ($campos as $campo) {
        if (isset($_POST[$campo])) {
            $valor = $_POST[$campo];
            $datos[$campo] = $valor;
        }
    }

    // Llamar al procedimiento almacenado para autenticar al usuario
    $stmt = $mysqli->prepare("CALL Login_Usuario(?, ?, @o_retorno, @o_Id_Rol)");
    $stmt->bind_param("ss", $datos['userName'], $datos['password']);
    $stmt->execute();

    $result = $mysqli->query("SELECT @o_retorno AS retorno, @o_Id_Rol AS rol");
    $row = $result->fetch_assoc();

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
