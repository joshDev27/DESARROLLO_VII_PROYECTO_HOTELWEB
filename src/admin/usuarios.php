
<?php




$array_info_user_admin  = array();

$con = mysqli_connect('localhost', 'root', '', 'hotel_hotoño');
if ($con === false) {
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}



$sql =
    "SELECT u.Id_Usuario as id , u.Nombre as nombre, u.Apellido as apellido,
    u.Telefono as telefono, u.correo as correo, u.Direccion as direccion,r.Desc_Rol as rol
    FROM usuario_rol ur JOIN usuario u ON u.Id_Usuario = ur.Id_usuario
    JOIN rol r ON ur.Id_rol=r.Id_Rol WHERE u.Id_Usuario != 4 ";

// var_dump($sql);
// die();

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $array_info_user_admin[] = array(
            'nombre' => $row['nombre'],
            'apellido' => $row['apellido'],
            'correo' => $row['correo'],
            'direccion' => $row['direccion'],
            'telefono' => $row['telefono'],
            'rol' => $row['rol'],
            'id' => $row['id'],
        );
    }
}


//configuraciones de la paginacion
$arrayConf = configurationPaginationTable($array_info_user_admin, 'usuarios');
$paginaActual = $arrayConf['paginaActual'];
$arrayDatosPorPagina = $arrayConf['array'];
$paginaUrlVar = $arrayConf['pageVar'];
$totalPaginas=$arrayConf['totalPaginas'];

$array_rol = array();
$sql = "SELECT * FROM rol";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $array_rol[] = array(
            'rol' => $row['Desc_Rol'],
        );
    }
}



$array_edit_user = ['nombre' => '', 'apellido' => '', 'correo' => '', 'direccion' => '', 'telefono' => '', 'rol' => '', 'id' => ''];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['action']) && $_POST['action'] === 'addUser') {
        echo "Usuario añadido correctamente";
    }
    if (isset($_POST['action']) && $_POST['action'] === 'getDataUser' && isset($_POST['userId'])) {
        $userId = $_POST['userId']; // Asegúrate de obtener el ID de usuario
        $sql = "SELECT u.Id_Usuario as id, u.Nombre as nombre, u.Apellido as apellido,
                u.Telefono as telefono, u.correo as correo, u.Direccion as direccion, r.Desc_Rol as rol
                FROM usuario_rol ur JOIN usuario u ON u.Id_Usuario = ur.Id_usuario
                JOIN rol r ON ur.Id_rol = r.Id_Rol WHERE u.Id_Usuario = $userId";

        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Responde con los datos del usuario en formato JSON
            echo json_encode($row);
        } else {
            echo json_encode(null); // Si no se encuentra el usuario, devuelve null
        }
    }
    if (isset($_POST['action']) && $_POST['action'] === 'updateUser' && isset($_POST['userId'])) {
        $userId = $_POST['userId'];
        $nuevoRol = 2; // Ensure this is set somewhere in your code
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['email'];
        $direccion = $_POST['direccion'];
    
        // Use prepared statements to avoid SQL injection
        $stmt = $con->prepare("UPDATE usuario u
            JOIN usuario_rol ur ON u.Id_Usuario = ur.Id_usuario
            SET 
                u.Nombre = ?, 
                ur.Id_rol = ?, 
                u.Apellido = ?, 
                u.Telefono = ?, 
                u.Correo = ?, 
                u.Direccion = ?
            WHERE 
                u.Id_Usuario = ?");
    
        // Bind the parameters
        $stmt->bind_param("ssssssi", $nombre, $nuevoRol, $apellido, $telefono, $correo, $direccion, $userId);
    
        // Execute the statement
        if ($stmt->execute()) {
            echo "Usuario actualizado exitosamente.";
        } else {
            echo "Error al actualizar usuario: " . $stmt->error;
        }
    }
    if (isset($_POST['action']) && $_POST['action'] === 'deleteUser' && isset($_POST['userId'])) {
        $userId = $_POST['userId'];
        // Preparar la consulta SQL
        $sql = "DELETE FROM FROM usuario_rol ur JOIN usuario u ON u.Id_Usuario = ur.Id_usuario
                JOIN rol r ON ur.Id_rol = r.Id_Rol WHERE u.Id_Usuario = $userId";

        // Ejecutar la consulta
        if ($con->query($sql) === TRUE) {
            echo "Usuario eliminado exitosamente.";
        } else {
            echo "Error al eliminar usuario: " . $con->error;
        }
    }
    if (isset($_POST['action']) && $_POST['action'] === 'deleteAllUser') {
        $sql = "DELETE FROM usuario WHERE Id_Usuario != 4";

        // Ejecutar la consulta
        if ($con->query($sql) === TRUE) {
            echo "Todos los registros han sido eliminados exitosamente";
        } else {
            echo "Error al eliminar los registros: " . $con->error;
        }
    }
}


if (isset($userId)) {
}

$con->close();

?>