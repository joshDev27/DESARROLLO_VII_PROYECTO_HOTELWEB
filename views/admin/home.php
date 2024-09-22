<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<?php
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
?>
<div class="body container-fluid mt-3" id="home_admin">
    <div class="row info-admin justify-content-center">
        <?php
        foreach ($array_info_admin as $info) {
            echo "
                    <div class='col-xl-2 col-sm-6 mb-xl-0 mb-6'>
                        <div class='card shadow'>
                            <div class='card-header p-3 pt-2'>
                                <div class='icon'>
                                   {$info['icono']}
                                </div>
                                <div class='text-end pt-1 text'>
                                    <p class='text-sm mb-0 text-capitalize'>{$info['titulo']}</p>
                                    <h4 class='mb-0'>{$info['info']}</h4>
                                </div>
                            </div>
                            <hr class='dark horizontal my-0'>
                            <div class='card-footer p-3'>
                            <p class='mb-0'>
                                <span class='text-success text-sm font-weight-bolder'>
                                    <span class='material-symbols-outlined'>event</span>
                                    {$info['template']}
                                </span>
                            </p>
                            </div>
                        </div>
                    </div>
               ";
        }
        ?>
    </div>
    <div class="charts">
    <div class="row">
            <div class=" col-xl-8 col-sm-6 mb-xl-0 shadow p-3 mb-5 bg-body-tertiary rounded mt-3">
                <h3 class="text-center">Proximas Reservas</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Check In</th>
                            <th scope="col">Ckeck Out</th>
                            <th scope="col">Nombre Completo </th>
                            <th scope="col">Cédula</th>
                            <th scope="col">Número de Habitación</th>
                            <th scope="col">Tipo de Habitación</th>
                        </tr>
                    </thead>
                    <?php
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
                    ?>
                    <tbody>
                        <?php 
                        foreach( $proxima_reservas as $reservas){
                            echo "
                            <tr>
                                <td scope='row'>{$reservas['check_in']}</td>
                                <td >{$reservas['check_out']}</td>
                                <td>{$reservas['nombre_completo']}</td>
                                <td>{$reservas['cedula']}</td>
                                <td>{$reservas['numero_habitacion']}</td>
                                <td>{$reservas['tipo_habitacion']}</td>
                            </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class=" col-xl-5 col-sm-6 mb-xl-0 shadow p-3 mb-5 bg-body-tertiary rounded mt-3">
                <canvas id="estado_habitaciones" style="width:100%;max-width:700px"></canvas>
                <span>
                    <h3 class="text-center">Estado de Habitaciones</h3>
                </span>
            </div>
            <div class=" col-xl-5 col-sm-6 mb-xl-0 shadow p-3 mb-5 bg-body-tertiary rounded mt-3">
                <canvas id="estados_huespedes" style="width:100%;max-width:700px"></canvas>
                <span>
                    <h3 class="text-center">Cantidad de Huespedes Hospedados</h3>
                </span>
            </div>

        </div>
      
    </div>
</div>

<script>
    //Estados habitaciones 
    var xValues = ["Disponibles", "Reservados", "ocupados"];

    var yValues = [
        <?php echo (int) $info_habitaciones_disponibles ?>,
        <?php echo (int) $info_habitaciones_reservados ?>,
        <?php echo (int) $info_habitaciones_ocuapdos ?>
    ];
    new Chart("estado_habitaciones", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                data: yValues,
                hoverOffset: 4
            }]
        }
    });
    // estado Huespedes
    var xValues = ["Niños", "Adultos", "Adolescentes"];
    var yValues = [55, 49, 30];
    new Chart("estados_huespedes", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                data: yValues,
                hoverOffset: 4
            }]
        }
    });
</script>