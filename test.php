<?php 
die();
include './src/function.php';
include './src/correo.php'; 

EnviarCorreo('leandro.rodriguez@utp.ac.pa', 'esto es una prueba del correo', '<p>prueba de correo</p>', true);
//caracteristicas_hoteles();

die();
$con = mysqli_connect('localhost','root','','hotel_hotoño');
if ($con === false) {
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}

die();

$array=[
    'correo'=>'leandro1220@hotmail.com',
    'nombre'=>'Leandro',
    'apellido'=>'Rodríguez',
    'mensaje'=>''
];
sendEmail($array,'');
die();

?>