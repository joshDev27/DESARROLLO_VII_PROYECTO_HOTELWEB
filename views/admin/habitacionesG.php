<?php require './src/admin/habitacionesG.php'; ?>
<div class=" body container-fluid justify-content-center " id="container-gestion-habitaciones">
    <div class="header-admin">

        <h2> Tipos de Habitaciones Habitaciones</h2>
    </div>
    <div class="eventos d-flex p-2 gap-3">
        <span>
            <input type="checkbox" class="btn-check" id="btn-check_all" autocomplete="off">
            <label class="btn btn-primary" for="btn-check_all">Select All</label>
        </span>

        <button class="btn btn-danger" id="btn_delete_all_user" disabled> <i class="fa-solid fa-trash"></i> Delete All</button>
        <button class="btn btn-secondary" data-bs-target="#add_admin_modal" data-bs-toggle="modal">
            <i class="fa-solid fa-plus"></i> Add Tipo Habitacíon
        </button>
    </div>
    <div class="overflow-x-auto">
        <table class="table table-light table-hover">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Tipo de Habitación</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Caracteristicas</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (getRoomInformation() as $index => $array) : ?>

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
                        <td class='item-table'><?php echo $array['tipo'] ?></td>
                        <td class='item-table'><?php echo $array['descripcion'] ?></td>
                        <td class='item-table'>
                            <?php foreach ($array['caracteristicas'] as $value): ?>
                                <p><?php echo $value ?></p>
                            <?php endforeach; ?>
                        </td>
                        <td class='item-table'><?php echo $array['precio'] ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Paginación -->
    <?php include './components/pagination.php' ?>
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