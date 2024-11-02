<?php
require_once './src/admin/usuarios.php';
require_once "components/admin/editUser.php";
require_once "components/admin/addUser.php";
?>
<div class=" body container-fluid justify-content-center " id="container-usuarios">
    <div class="header-admin">

        <h2> Usuario Registrados</h2>
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
        <table class="table table-light table-hover">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Acciones</th>
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
                        <th scope='row'>
                            <input class="form-check-input" type="checkbox" value="<?php echo $user_info['id'] ?>" id="checbox<?php echo $user_info['id']?>">
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
                        <td><?php echo $user_info['rol'] ?></td>
                        <td><?php echo $user_info['nombre'] ?></td>
                        <td><?php echo $user_info['apellido'] ?></td>
                        <td><?php echo $user_info['correo'] ?></td>
                        <td><?php echo $user_info['telefono'] ?></td>
                        <td><?php echo $user_info['direccion'] ?></td>


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
        let checkboxes = document.querySelectorAll('.form-check-input');
        let selectedCount = 0;

        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
                selectedCount++;
            }
        });

        if (selectedCount < 2) {
            alert("debe de seleccionar minimo 2 usuarios para eliminar");
        } else {
            // Lógica para eliminar usuarios seleccionados
        }
    });


    document.addEventListener('DOMContentLoaded', function() {
        let checkboxes = document.querySelectorAll('.form-check-input');
        let selectedCount = 0;

        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
                selectedCount++;
            }
        });

        if (selectedCount >= 2) {
            btnDeleteAllUser.disabled = false;
        }

    });
</script>