<?php 
include_once './src/function.php';

$array=[

    'correo'=>'leandro1220@hotmail.com',
    'nombre'=>'Leandro',
    'apellido'=>'Rodríguez',
    'mensaje'=>''
];
sendEmail($array);
die();

?>