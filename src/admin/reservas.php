<?php 
$array_reservas = [
    [
        'IdReservas' => 1004,
        'Huesped' => 'Juan Pérez',
        'IdUsuarios' => 2,
        'CheckIn' => '2024-09-15',
        'CheckOut' => '2024-09-18',
        'NumerodeNoches' => 3,
        'CantidaddeHabitaciones' => 1,
        'TipodeHabitación' => 'Doble',
        'Correo' => 'juan@example.com',
        'Estado' => 'Confirmada',
    ],
    [
        'IdReservas' => 2434,
        'Huesped' => 'María Rodríguez',
        'IdUsuarios' => 1,
        'CheckIn' => '2024-09-20',
        'CheckOut' => '2024-09-22',
        'NumerodeNoches' => 2,
        'CantidaddeHabitaciones' => 2,
        'TipodeHabitación' => 'Suite',
        'Correo' => 'maria@example.com',
        'Estado' => 'Pendiente',
    ],

];


//configuraciones de la paginacion
$arrayConf = configurationPaginationTable($array_reservas, 'reservas');
$paginaActual = $arrayConf['paginaActual'];
$arrayDatosPorPaginaReservas = $arrayConf['array'];
$paginaUrlVar = $arrayConf['pageVar'];
$totalPaginas=$arrayConf['totalPaginas'];



?>