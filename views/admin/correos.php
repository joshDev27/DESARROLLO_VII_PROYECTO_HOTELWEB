<?php require_once './src/admin/correos.php';


// Configuración de la paginación
$itemsPorPagina = 8;
$totalItems = count($array_correos);
$totalPaginas = ceil($totalItems / $itemsPorPagina);

// Obtener el número de página actual desde la URL
$paginaActual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$paginaActual = max(1, min($totalPaginas, $paginaActual));

// Obtener el subconjunto de datos para la página actual
$inicio = ($paginaActual - 1) * $itemsPorPagina;
$arrayDatosPorPagina = array_slice($array_correos, $inicio, $itemsPorPagina);


?>
<div class=" body container-fluid justify-content-center " id="container-correos">
    <div class="header-admin">
        <h2> Estados de Correos</h2>
    </div>
    <div class="eventos d-flex p-2 gap-3">
        <span>
            <input type="checkbox" class="btn-check" id="btn-check_all" autocomplete="off">
            <label class="btn btn-primary" for="btn-check_all">Select All</label>
        </span>

        <button class="btn btn-danger" id="btn_delete_all_user" disabled> <i class="fa-solid fa-trash"></i> Delete All</button>
        <button class="btn btn-secondary" data-bs-target="#add_admin_modal" data-bs-toggle="modal">
            <i class="fa-solid fa-plus"></i> Add New User
        </button>
    </div>
    <div class="overflow-x-auto">
        <table class="table table-light table-hover" id="table_correos">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Estado</th>
                    <th scope="col">Asunto</th>
                    <th scope="col">Mensaje</th>
                    <th scope="col">Persona</th>
                    <th scope="col">E mail</th>


                </tr>
            </thead>
            <tbody>
                <?php foreach ($arrayDatosPorPagina as $correo_info): ?>
                    <tr>
                        <th scope='row'>
                            <input class="form-check-input" type="checkbox" value="<?php echo $user_info['id'] ?>" id="checbox<?php echo $user_info['id'] ?>">
                        </th>
                        <td>
                            <span data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Edit">
                                <input type="button" class="btn-check" value="<?php echo $user_info['id']; ?>" data-bs-target="#edit_admin_modal" id="btn_edit_user_<?php echo $user_info['id']; ?>" data-bs-toggle="modal">
                                <label class="btn btn-primary" for="btn_edit_user_<?php echo $user_info['id']; ?>">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </label>
                            </span>

                            <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Delete" type="submit" name="btn-delete" value="<?php echo $user_info['id']; ?>">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                        <th scope='row'><?php echo '' ?></th>
                        <th scope='row'><?php echo '' ?></th>
                        <td><?php echo $correo_info['mensaje'] ?></td>
                        <td><?php echo $correo_info['nombre'] . ' , ' . $correo_info['apellido'] ?></td>
                        <td><?php echo $correo_info['correo'] ?></td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
    <!-- Paginación -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <?php if ($paginaActual > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="index.php?admin=usuarios&pagina=<?php echo $paginaActual - 1; ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>

                <li class="page-item">
                    <a class="page-link <?php echo (isset($_GET['pagina']) && $_GET['pagina'] == $i) ? "active" : ""  ?>" href="index.php?admin=usuarios&pagina=<?php echo $i; ?>">
                        <?php echo $i; ?>
                    </a>
                </li>
            <?php endfor; ?>

            <?php if ($paginaActual < $totalPaginas): ?>
                <li class="page-item">
                    <a class="page-link " href="index.php?admin=usuarios&pagina=<?php echo $paginaActual + 1; ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>

<script>
    const btnCheckAll = document.getElementById('btn-check_all');
    const btnDeleteAllUser = document.getElementById('btn_delete_all_user');
    btnCheckAll.onclick = function() {
        var checkboxes = document.querySelectorAll('.form-check-input');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
        //valida el estado del boton de eliminar todos los usuario
        let status = btnCheckAll.checked ? false : true;
        btnDeleteAllUser.disabled = status;
    }


    btnDeleteAllUser.addEventListener('click', (e) => {

    });


    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.form-check-input');

        function updateButtonState() {
            let selectedCount = 0;

            checkboxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    selectedCount++;
                }
            });

            // Habilita el botón si hay 2 o más checkboxes seleccionados
            btnDeleteAllUser.disabled = selectedCount < 2;
        }

        // Llama a la función al cargar la págiNna para establecer el estado inicial del botón
        updateButtonState();

        // Añade el evento 'change' a cada checkbox para actualizar el estado del botón en tiempo real
        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', updateButtonState);
        });
    });
</script>