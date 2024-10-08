<div class="container-fluid justify-content-center ">
    <h2> Tipos de Habitaciones Habitaciones</h2>
    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id de Tipo de Habitaciones</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Tipo de Habitación</th>>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (getRoomInformation() as $index => $array) : ?>
 
                <tr>
                <th scope='row'><?echo $index?></th>
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
            <?php endforeach; ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php foreach ($reservas as $index => $array): ?>

                <li class="page-item <?php echo ($index == 0) ? 'active' : '' ?>"><a class="page-link" href="#"><?php echo ($index + 1) ?></a></li>
            <?php endforeach; ?>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>