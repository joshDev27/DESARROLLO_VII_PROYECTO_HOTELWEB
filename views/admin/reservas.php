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
<?php
$rows_per_page = 10; // Set the number of rows per page
$total_rows = count($reservas); // Total number of reservations
$total_pages = ceil($total_rows / $rows_per_page); // Calculate total pages

// Get the current page from the URL or default to the first page
$current_page = isset($_GET['index']) ? (int)$_GET['index'] : 1;
$start_index = ($current_page - 1) * $rows_per_page; // Calculate the starting row for the current page

// Slice the $reservas array to get only the rows for the current page
$display_reservas = array_slice($reservas, $start_index, $rows_per_page);
?>

<div class=" body container-fluid justify-content-center " id="container-info-reservas">
    <div class="header-admin">

        <h2> Reservas Registrados</h2>
    </div>
    <div class="overflow-x-auto">
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
                foreach ($display_reservas as $key => $data_reservas) {
                    $onClick = prueba_parametro($data_reservas['Id Usuarios']);
                    echo "
            <tr>
                <th scope='row'>" . ($start_index + $key + 1) . "</th>
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
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item <?php echo ($current_page == 1) ? 'disabled' : '' ?>">
                <a class="page-link" href="?index=<?php echo $current_page - 1; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?php echo ($i == $current_page) ? 'active' : '' ?>">
                    <a class="page-link" href="?index=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>
            <li class="page-item <?php echo ($current_page == $total_pages) ? 'disabled' : '' ?>">
                <a class="page-link" href="?index=<?php echo $current_page + 1; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

</div>