<?php
require_once dirname(__DIR__, 2) . '/app/controller/user_controller.php';
require_once dirname(__DIR__, 2) . '/src/function.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$user_controller = new UserController();
$data_reservas_user = $user_controller->obtenerTotales($_SESSION['idUsuario'],7);



// echo '<pre>';
// echo 'ID de Usuario '.$_SESSION['idUsuario'] .'<br>';
// print_r($data_reservas_user);
// echo '</pre>';
// die();

$array_reservas_user = array();
foreach ($data_reservas_user as $reserva) {
    $array_reservas_user[] = [
        'Id Reservas' => $reserva['re_id_Reserva'],
        'Huesped' => $reserva['hu_nombre'].'  '.$reserva['hu_apellido'],
        'Id Usuarios' => $reserva['re_id_Usuario'],
        'Check In' => $reserva['re_fecha_checkin'],
        'Check Out' => $reserva['re_fecha_checkout'],
        'Numero de Noches' => $reserva['re_num_noches'],
        'Tipo de Habitación' => 'campo vacio',
        'Correo' => $reserva['us_correo'],
        'Estado' => $reserva['re_stado'],
    ];
}

//configuraciones de la paginacion
$arrayConf = configurationPaginationTable($array_reservas_user, 'page=usuariosReservas', 4);
$paginaActual = $arrayConf['paginaActual'];
$arrayDatosPorPagina = $arrayConf['array'];
$paginaUrlVar = $arrayConf['pageVar'];
$totalPaginas = $arrayConf['totalPaginas'];
