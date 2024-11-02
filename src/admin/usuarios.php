
<?php

$array_info_user_admin  = array();

$con = mysqli_connect('localhost', 'root', '', 'hotel_hotoño');
if ($con === false) {
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}

$sql = "SELECT u.Id_Usuario as id , u.Nombre as nombre, u.Apellido as apellido,
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
// print_r($array_info_user_admin);
// die();
//print_r($array_info_user_admin);
$con->close();

?>
