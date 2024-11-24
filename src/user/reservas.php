<?php
require_once dirname(__DIR__, 2) . '/database/conection/Database.php';
require_once dirname(__DIR__, 2) . '/app/controller/user_controller.php';
require_once dirname(__DIR__, 2) . '/app/controller/admin_controller.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$userController = new UserController();

$array_tipo_habitacion = $userController->obtenerTotales(null, 10);


// echo '<pre>';
// echo "<br> array Total <br>";
// print_r($array_tipo_habitacion);
// echo '/<pre>';


$arrayHabitacionPrecio = array();
foreach ($array_tipo_habitacion as $data) {
    $arrayHabitacionPrecio[] = [
        'idHabticaion' => $data['th_id_tipo'],
        'precio' => $data['th_precio'],
        'descHabtiacion' => $data['th_esc_habitacion']
    ];
}


if (!isset($_SESSION['resumenReserva'])) {
    $_SESSION['resumenReserva'] = array();
}

$subtotal = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['action']) && $_POST['action'] === 'agregarReservaHuesped') {
        $huespedes = $_POST['huespedes'];
        // Decodificar el JSON
        $data = json_decode($huespedes, true);

        // Obtener el ID de la habitación desde el JSON
        $habitacionId = $data['tipo_habitacion']; // Asumiendo que tipo_habitacion es el ID de la habitación

        // Inicializar el arreglo de huéspedes
        $huespedes = [];

        // Iterar sobre los huéspedes y reestructurar los datos
        foreach ($data['huespedes'] as $huesped) {
            // Crear un nuevo arreglo para cada huésped
            $nuevoHuesped = [
                'cedula' => isset($huesped['cedula']) ? $huesped['cedula'] : null, // Usar null si no hay cédula
                'nombre' => $huesped['nombre'],
                'apellido' => $huesped['apellido'],
                'edad' => $huesped['edad'],
                'habitacion' => $habitacionId // Asignar el ID de la habitación desde el JSON
            ];

            // Agregar el nuevo huésped al arreglo
            $huespedes[] = $nuevoHuesped;
        }
        $_SESSION['huespedes'] = $huespedes;

        // Crear un array para almacenar la cantidad de huéspedes y las habitaciones
        $resultado = array();

        // Recopilar las habitaciones ocupadas
        foreach ($huespedes as $huesped) {
            $resultado[] = [
                "cantidad_huéspedes" => count($huespedes), // Contar la cantidad de huéspedes
                "idHabticaion" =>  $huesped['habitacion'],
            ];
        }

        // Obtener habitaciones únicas
        //$resultado["habitaciones"] = array_unique($resultado["habitaciones"]);

        $_SESSION['resumenReserva'] = $resultado;


        // echo '<pre>';
        // echo "<br> array Resumen reserva <br>";
        // print_r($_SESSION['resumenReserva']);
        // echo '/<pre>';

        // // Resultado final
        // echo '<pre>';
        // echo "<br> array huespedes <br>";
        // print_r($huespedes);
        // echo '/<pre>';
        die();
    }
    if (isset($_POST['action']) && $_POST['action'] === 'realizarReserva') {
        if (isset($_POST['checkin']) && isset($_POST['checkout'])) {

            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $huespedes =   $_SESSION['huespedes'];
            // Crear objetos DateTime a partir de las fechas
            $fechaCheckin = new DateTime($checkin);
            $fechaCheckout = new DateTime($checkout);

            // Calcular la diferencia
            $diferencia = $fechaCheckin->diff($fechaCheckout);

            // Obtener el número de noches
            $num_noches = $diferencia->days; // La propiedad 'days' contiene el número total de días

            foreach ($_SESSION['resumenReserva'] as $key => $data) {
                $_SESSION['resumenReserva'][$key]['numNoches'] = $num_noches;
            };

            $userController->registrarReserva($_SESSION['idUsuario'], $num_noches,  $checkout, $checkin, $huespedes);
        }

    }
}


// Agregar el precio y la descripción a cada habitación en el resumen de reserva
foreach ($_SESSION['resumenReserva'] as $key => $reserva) {
    foreach ($arrayHabitacionPrecio as $habitacion) {
        if ($reserva['idHabticaion'] == $habitacion['idHabticaion']) {
            // Agregar el precio y la descripción de la habitación al resumen de reserva
            $_SESSION['resumenReserva'][$key]['precio'] = $habitacion['precio'];
            $_SESSION['resumenReserva'][$key]['descHabtiacion'] = $habitacion['descHabtiacion'];
            $_SESSION['resumenReserva'][$key]['costoPorNoche'] = $reserva['numNoches'] * $habitacion['precio'];
        }
    }
}
unset($reserva); // Romper la referencia con el último elemento

$arrayResumenReserva = $_SESSION['resumenReserva'];


// echo '<pre>';
// echo "<br> array Resumen reserva <br>";
// print_r($_SESSION['resumenReserva']);
// echo '/<pre>';

$impuesto = $subtotal * 0.07;
$total = $subtotal + $impuesto;
