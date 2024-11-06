<?php
//#	numero de habitacion	Tipo	Cantidad de camas	Estado	Usuario Ocupado

$infoHabitacion = [
    [
        'numeroDeHabitacion' => '101',
        'tipo' => 'Individual',
        'cantiadDeCamas' => 1,
        'estado' => 'Ocupada',
        'huesped' => 'Juan Pérez',
    ],
    [
        'numeroDeHabitacion' => '102',
        'tipo' => 'Doble',
        'cantiadDeCamas' => 2,
        'estado' => 'Disponible',
        'huesped' => '',
    ],
    [
        'numeroDeHabitacion' => '103',
        'tipo' => 'Triple',
        'cantiadDeCamas' => 3,
        'estado' => 'Ocupada',
        'huesped' => 'María Gómez',
    ],
    [
        'numeroDeHabitacion' => '104',
        'tipo' => 'Suite',
        'cantiadDeCamas' => 2,
        'estado' => 'Disponible',
        'huesped' => '',
    ],
    [
        'numeroDeHabitacion' => '105',
        'tipo' => 'Individual',
        'cantiadDeCamas' => 1,
        'estado' => 'Ocupada',
        'huesped' => 'Carlos Ramírez',
    ],
    [
        'numeroDeHabitacion' => '106',
        'tipo' => 'Doble',
        'cantiadDeCamas' => 2,
        'estado' => 'Mantenimiento',
        'huesped' => '',
    ],
    [
        'numeroDeHabitacion' => '107',
        'tipo' => 'Individual',
        'cantiadDeCamas' => 1,
        'estado' => 'Ocupada',
        'huesped' => 'Ana López',
    ],
    [
        'numeroDeHabitacion' => '108',
        'tipo' => 'Triple',
        'cantiadDeCamas' => 3,
        'estado' => 'Disponible',
        'huesped' => '',
    ],
    [
        'numeroDeHabitacion' => '109',
        'tipo' => 'Doble',
        'cantiadDeCamas' => 2,
        'estado' => 'Ocupada',
        'huesped' => 'José Martínez',
    ],
    [
        'numeroDeHabitacion' => '110',
        'tipo' => 'Suite',
        'cantiadDeCamas' => 2,
        'estado' => 'Disponible',
        'huesped' => '',
    ]
];


//configuraciones de la paginacion
$arrayConf = configurationPaginationTable($infoHabitacion, 'habitaciones');
$paginaActual = $arrayConf['paginaActual'];
$arrayDatosPorPagina = $arrayConf['array'];
$paginaUrlVar = $arrayConf['pageVar'];
$totalPaginas=$arrayConf['totalPaginas'];