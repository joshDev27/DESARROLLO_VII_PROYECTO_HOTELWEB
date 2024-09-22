<?php
$array_info_user_admin = [
    [
        'Id' => 0,
        'Rol' => 'Administrador',
        'Nombre' => 'Juan',
        'Apellido' => 'Pérez',
        'Email' => 'juan@example.com',
        'Telefono' => '+1 555-123-4567',
        'Direccion' => 'Calle Principal 123',
    ],
    [
        'Id' => 1,
        'Rol' => 'Administrador',
        'Nombre' => 'María',
        'Apellido' => 'Rodríguez',
        'Email' => 'maria@example.com',
        'Telefono' => '+1 555-987-6543',
        'Direccion' => 'Avenida Central 456',
    ],
];
?>
<div class="container-fluid justify-content-center ">
    <h2> Usuario Registrados</h2>
    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Rol</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">E mail</th>
                <th scope="col">Télefono</th>
                <th scope="col">Dirrección</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($array_info_user_admin as $user_info) {
                echo "
                <tr>
                <th scope='row'>{$user_info['Id']}</th>
                <td>{$user_info['Rol']}</td>
                <td>{$user_info['Nombre']}</td>
                <td>{$user_info['Apellido']}</td>
                <td>{$user_info['Email']}</td>
                <td>{$user_info['Telefono']}</td>
                <td>@{$user_info['Direccion']}</td>
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
            <li class="page-item"><a class="page-link" href="#">1</a></li>
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