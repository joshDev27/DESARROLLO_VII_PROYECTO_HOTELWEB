<?php require_once './src/usuarios_admin.php'; ?>
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
            <?php foreach ($array_info_user_admin as $user_info): ?>
                <tr>
                    <th scope='row'><?php echo $user_info['Id'] ?></th>
                    <td><?php echo $user_info['Rol'] ?></td>
                    <td><?php echo $user_info['Nombre'] ?></td>
                    <td><?php echo $user_info['Apellido'] ?></td>
                    <td><?php echo $user_info['Email'] ?></td>
                    <td><?php echo $user_info['Telefono'] ?></td>
                    <td><?php echo $user_info['Direccion'] ?></td>
                </tr>
            <?php endforeach ?>

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