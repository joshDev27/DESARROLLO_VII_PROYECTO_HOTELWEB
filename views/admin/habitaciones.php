<div class=" body container-fluid justify-content-center " id="container-habitaciones">
    <h2> Tipos de Habitaciones Habitaciones</h2>

    <div class="overflow-x-auto">
        <table class="table table-light table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">numero de habitacion</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Cantidad de camas </th>
                    <th scope="col">Estado</th>
                    <th scope="col">Usuario Ocupado</th>
                </tr>
            </thead>
            <tbody>
                <?php //foreach (getRoomInformation() as $index => $array) : 
                ?>

                <tr>
                    <th scope='row'><? echo $index ?></th>
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
                <?php //endforeach; 
                ?>
            </tbody>
        </table>
    </div>
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