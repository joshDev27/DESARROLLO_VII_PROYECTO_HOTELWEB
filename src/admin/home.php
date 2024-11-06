<?php
/*

para la tabla de proxima reservas
SELECT
    r.Fecha_checkin AS "Check In",
    r.Fecha_checkout AS "Check Out",
   CONCAT( h.nombre ,' ',h.Apellido)AS "Nombre Completo",
    h.cedula AS "Cédula",
    r.cant_habitacion AS "Número de Habitación",
    r.Estado AS "Tipo de Habitación"
FROM reserva r
JOIN huesped h ON r.Id_Reserva = h.Id_Reserva
WHERE r.Fecha_checkin > CURRENT_DATE
ORDER BY r.Fecha_checkin
LIMIT 0, 25;
*/


/*
para la parte de info de habitaciones 
SELECT
    (SELECT COUNT(*) FROM habitacion WHERE estado = 'ocupada') AS habitaciones_ocupadas,
    (SELECT COUNT(*) FROM habitacion WHERE estado = 'disponible') AS habitaciones_disponibles,
    (SELECT COUNT(*) FROM reserva WHERE estado = 'reservado') AS habitaciones_reservadas,
    (SELECT COUNT(*) FROM habitacion WHERE estado IN ('ocupada', 'disponible', 'reservado')) AS habitaciones_totales;

*/
$info_habitaciones_ocuapdos = 20;
$info_habitaciones_disponibles = 40;
$info_habitaciones_reservados = 50;
$info_habitaciones_totales = +$info_habitaciones_disponibles + $info_habitaciones_ocuapdos + $info_habitaciones_reservados;


$array_info_admin = [
    [
        'titulo' => 'Total de Habitaciones',
        'info' => $info_habitaciones_totales,
        'icono' => "<span class='material-symbols-outlined'>weekend</span>",
        'template' => 'Last 24 Hours',
    ],
    [
        'titulo' => 'Habitaciones Reservados',
        'info' => $info_habitaciones_reservados,
        'icono' => "<span class='material-symbols-outlined'>weekend</span>",
        'template' => 'Last 24 Hours',
    ],
    [
        'titulo' => 'Habitaciones Disponibles',
        'info' => $info_habitaciones_disponibles,
        'icono' => "<span class='material-symbols-outlined'>weekend</span>",
        'template' => 'Last 24 Hours',
    ],
    [
        'titulo' => 'Habitaciones Ocuapdos',
        'info' => $info_habitaciones_ocuapdos,
        'icono' => "<span class='material-symbols-outlined'>weekend</span>",
        'template' => 'Last 24 Hours',
    ],
    [
        'titulo' => 'Usuarios',
        'info' => 0,
        'icono' => "<span class='material-symbols-outlined'>group</span>",
        'template' => 'Last 24 Hours',
    ],
    [
        'titulo' => 'Huespedes',
        'info' => 0,
        'icono' => "<span class='material-symbols-outlined'>group</span>",
        'template' => 'Last 24 Hours',
    ],
];

$proxima_reservas = array(
    array(
        'check_in' => '2022-01-01',
        'check_out' => '2022-01-03',
        'nombre_completo' => 'Juan Pérez',
        'cedula' => '12345678',
        'numero_habitacion' => '101',
        'tipo_habitacion' => 'Sencillo'
    ),
    array(
        'check_in' => '2022-01-05',
        'check_out' => '2022-01-07',
        'nombre_completo' => 'Maria Rodríguez',
        'cedula' => '23456789',
        'numero_habitacion' => '202',
        'tipo_habitacion' => 'Doble'
    ),
    array(
        'check_in' => '2022-01-10',
        'check_out' => '2022-01-12',
        'nombre_completo' => 'José Gómez',
        'cedula' => '34567890',
        'numero_habitacion' => '303',
        'tipo_habitacion' => 'Triplo'
    ),
    array(
        'check_in' => '2022-01-15',
        'check_out' => '2022-01-17',
        'nombre_completo' => 'Carlos López',
        'cedula' => '45678901',
        'numero_habitacion' => '404',
        'tipo_habitacion' => 'Sencillo'
    ),
    array(
        'check_in' => '2022-01-20',
        'check_out' => '2022-01-22',
        'nombre_completo' => 'Sofía García',
        'cedula' => '56789012',
        'numero_habitacion' => '505',
        'tipo_habitacion' => 'Doble'
    )
);

