
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $datos = [];

    // Procesar y validar cada campo
    $campos = [
        'userName',
        'email',
        'password',
        'confirmPassword'
    ];
    //encriptar el password
//   $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    foreach ($campos as $campo) {
        if (isset($_POST[$campo])) {
            $valor = $_POST[$campo];
        
            $datos[$campo] = $valor;
        }
    }
   // $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT); // Encriptar la contraseña

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
