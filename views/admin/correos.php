<?php require_once './src/admin/correos.php'; ?>
<div class=" body container-fluid justify-content-center " id="container-correos">
    <div class="header-admin">
        <h2> Estados de Correos</h2>
    </div>
    <div class="overflow-x-auto">
        <table class="table table-light table-hover" id="table_correos">
            <thead>
                <tr>
                    <th scope="col">Estado</th>
                    <th scope="col">Asunto</th>
                    <th scope="col">Mensaje</th>
                    <th scope="col">Persona</th>
                    <th scope="col"></th>
                    <th scope="col">E mail</th>


                </tr>
            </thead>
            <tbody>
                <?php foreach ($array_correos as $correo_info): ?>
                    <tr>
                        <th scope='row'><?php echo '' ?></th>
                        <th scope='row'><?php echo '' ?></th>
                        <td><?php echo $correo_info['mensaje'] ?></td>
                        <td><?php echo $correo_info['nombre'] . ' , ' . $correo_info['apellido'] ?></td>
                        <td><?php echo '' ?></td>
                        <td><?php echo $correo_info['correo'] ?></td>
                    </tr>
                <?php endforeach ?>

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