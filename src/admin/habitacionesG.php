<?php
require_once dirname(__DIR__, 2) . '/app/controller/admin_controller.php';
include_once dirname(__DIR__, 2) . '/src/function.php';

$adminController = new AdminController();
$array = $adminController->obtenerTotales(null,10);

$infoHabitacion = array();
foreach ($array as $info) {
    $infoHabitacion[] = [
        'id' => $info['th_id_tipo'],
        'tipo' => $info['th_esc_habitacion'],
        'disponibles' => $info['th_disponibles'],
        'camas' => $info['th_camas'],
        'banos' => $info['th_baños'],
        'total' => $info['th_total'],
        'imgLink' => $info['th_link_imagen'],
    ];
}

$arrayConf = configurationPaginationTable($infoHabitacion, 'admin=habitacionesG');
$paginaActual = $arrayConf['paginaActual'];
$arrayDatosPorPagina = $arrayConf['array'];
$paginaUrlVar = $arrayConf['pageVar'];
$totalPaginas = $arrayConf['totalPaginas'];
