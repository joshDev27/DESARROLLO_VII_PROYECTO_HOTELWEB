
<?php
include 'globals.php'; // Archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT); // Encriptar la contraseña
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $rol = $_POST['rol']; // Asegúrate de que el rol sea una opción válida

    // Llamar al procedimiento almacenado para registrar al usuario
    $stmt = $mysqli->prepare("CALL Registro_Usuario(?, ?, ?, ?, ?, ?, ?, @o_retorno)");
    $stmt->bind_param("issssss", $rol, $nombre, $apellido, $telefono, $contrasena, $correo, $direccion);
    $stmt->execute();

    $result = $mysqli->query("SELECT @o_retorno AS retorno");
    $row = $result->fetch_assoc();
    $codigoRetorno = $row['retorno'];

    if ($codigoRetorno == 1502) {
        echo "Registro exitoso.";
    } elseif ($codigoRetorno == 1501) {
        echo "El correo ya está registrado.";
    } else {
        echo "Error en el registro.";
    }
}
?>
