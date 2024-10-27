<?php

$array_correos = array();

$con = mysqli_connect('localhost', 'root', '', 'hotel_hotoño');
if ($con === false) {
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}

$sql = "SELECT * FROM consultas";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      
        $array_correos[] = array(
            'nombre' => $row['Nombre'],
            'apellido' => $row['Apellido'],
            'correo' => $row['correo'],
            'mensaje' => $row['Mensaje']
        );
        
    }
}

$con->close();

