
<?php
/*
$array_info_user_admin = [
    [
        'Id' => 0,
        'Rol' => 'Administrador',
        'Nombre' => 'Juan',
        'Apellido' => 'Pérez',
        'Email' => 'juan@example.com',
        'Telefono' => '+1 555-123-4567',
        'Direccion' => 'Calle Principal 123',
    ],
    [
        'Id' => 1,
        'Rol' => 'Administrador',
        'Nombre' => 'María',
        'Apellido' => 'Rodríguez',
        'Email' => 'maria@example.com',
        'Telefono' => '+1 555-987-6543',
        'Direccion' => 'Avenida Central 456',
    ],
];

*/

$array_info_user_admin  = array();

$con = mysqli_connect('localhost', 'root', '', 'hotel_hotoño');
if ($con === false) {
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}

$sql = "SELECT u.Nombre as nombre, u.Apellido as apellido,
 u.Telefono as telefono, u.correo as correo, u.Direccion as direccion,r.Desc_Rol as rol
FROM usuario_rol ur JOIN usuario u ON u.Id_Usuario = ur.Id_usuario
JOIN rol r ON ur.Id_rol=r.Id_Rol;";

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
        );
    }
}
//print_r($array_info_user_admin);
$con->close();

?>
