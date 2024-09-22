<?php require_once "components/admin/modal_reservas.php" ?>
<?php
$reservas = [
    [
        'Id Reservas' => 1004,
        'Huesped' => 'Juan Pérez',
        'Id Usuarios' => 2,
        'Check In' => '2024-09-15',
        'Check Out' => '2024-09-18',
        'Numero de Noches' => 3,
        'Cantidad de Habitaciones' => 1,
        'Tipo de Habitación' => 'Doble',
        'Correo' => 'juan@example.com',
        'Estado' => 'Confirmada',
    ],
    [
        'Id Reservas' => 2434,
        'Huesped' => 'María Rodríguez',
        'Id Usuarios' => 1,
        'Check In' => '2024-09-20',
        'Check Out' => '2024-09-22',
        'Numero de Noches' => 2,
        'Cantidad de Habitaciones' => 2,
        'Tipo de Habitación' => 'Suite',
        'Correo' => 'maria@example.com',
        'Estado' => 'Pendiente',
    ],

];
?>
<div class="container-fluid justify-content-center ">
    <h2> Reservas Registrados</h2>
    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id Reservas</th>
                <th scope="col">Huesped</th>
                <th scope="col">Check In</th>
                <th scope="col">Check Out</th>
                <th scope="col">Numero de Noches</th>
                <th scope="col">Cantidad de Habitaciones</th>
                <th scope="col">Tipo de Habitación</th>
                <th scope="col">Correo</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($reservas as $key => $data_reservas) {
                $onClick = prueba_parametro($data_reservas['Id Usuarios']);
                echo "
                <tr>
                    <th scope='row'>{$key}</th>
                    <td class='item-table'>{$data_reservas['Id Reservas']}</td>
                    <td onclick='$onClick' data-bs-toggle='modal' data-bs-target='#reservas_usuarios_admin' class='item-table modal-select'>{$data_reservas['Huesped']}</td>
                    <td class='item-table'>{$data_reservas['Check In']}</td>
                    <td class='item-table'>{$data_reservas['Check Out']}</td>
                    <td class='item-table'>{$data_reservas['Numero de Noches']}</td>
                    <td class='item-table'>{$data_reservas['Cantidad de Habitaciones']}</td>
                    <td class='item-table'>{$data_reservas['Tipo de Habitación']}</td>
                    <td class='item-table'>{$data_reservas['Correo']}</td>
                    <td class='item-table'>{$data_reservas['Estado']}</td>
                </tr>
                ";
            }
            ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
