<?php require_once './src/admin/correos.php'; ?>
<div class=" body container-fluid justify-content-center " id="container-correos">
    <div class="header-admin">
        <h2> Estados de Correos</h2>
    </div>
    <div class="eventos d-flex p-2 gap-3">
        <!-- <span>
            <input type="checkbox" class="btn-check" id="btn-check_all" autocomplete="off">
            <label class="btn btn-primary" for="btn-check_all">Select All</label>
        </span>

        <button class="btn btn-danger" id="btn_delete_all_correo" disabled> <i class="fa-solid fa-trash"></i> Delete All</button>
     -->
    </div>
    <div class="overflow-x-auto">
        <table class="table table-light table-hover" id="table_correos">
            <thead>
                <tr>
                    <!-- <th scope="col"></th> -->
                    <th scope="col"></th>
                    <th scope="col">Asunto</th>
                    <th scope="col">Mensaje</th>
                    <th scope="col">Persona</th>
                    <th scope="col">E mail</th>
                    <th scope="col">Date</th>


                </tr>
            </thead>
            <tbody>
                <?php foreach ($arrayDatosPorPagina as $correo_info): ?>
                    <tr>
                        <!-- <th scope='row'>
                            <input class="form-check-input" type="checkbox" value="<?php echo $correo_info['id'] ?>" id="checbox<?php echo $correo_info['id'] ?>">
                        </th> -->
                        <td class="container-acciones">
                            <button
                                class="btn btn-danger" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-title="Delete"
                                id="btnDeleteCorreo"
                                data-user-id="<?php echo $correo_info['id']; ?>"
                                class="btn btn-danger" data-bs-toggle="tooltip">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                        <th scope='row'><?php echo $correo_info['asunto'] ?></th>
                        <td><?php echo $correo_info['mensaje'] ?></td>
                        <td><?php echo $correo_info['nombre'] . ' , ' . $correo_info['apellido'] ?></td>
                        <td><?php echo $correo_info['correo'] ?></td>
                        <td><?php echo $correo_info['date'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <!-- Paginación -->
    <?php include './components/pagination.php' ?>
</div>

<script>
    const btnCheckAll = document.getElementById('btn-check_all');
    const btnDeleteAllCorreo = document.getElementById('btn_delete_all_correo');
    btnCheckAll.onclick = function() {
        var checkboxes = document.querySelectorAll('.form-check-input');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
        //valida el estado del boton de eliminar todos los usuario
        let status = btnCheckAll.checked ? false : true;
        btnDeleteAllCorreo.disabled = status;
    }


    document.addEventListener('DOMContentLoaded', function() {

        document.querySelectorAll('#btnDeleteCorreo').forEach(button => {

            button.addEventListener('click', (e) => {
                const correoId = button.getAttribute('data-user-id'); // Obtiene el `correoId` del atributo `data-user-id`

                // Verifica que `correoId` no esté vacío
                if (!correoId) {
                    console.error('Error: el ID de usuario no está definido.');
                    alert('Error: el ID de usuario no está definido.');
                    return;
                }
                // Crear un objeto FormData a partir del formulario
                const formData = new FormData();
                formData.append("action", "deleteCorreo"); // Agregar el campo 'action' con el valor 'addUser'
                formData.append("correoId", correoId); // Agregar el campo 'action' con el valor 'addUser'

                fetch('./src/admin/correos.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        //console.log(data);
                        // Recargar la página después del llamado
                        window.location.reload();
                    })
                    .catch(error => console.error('Error:', error));
            });
        })
    });

    btnDeleteAllCorreo.addEventListener('click', (e) => {
        // Crear un objeto FormData a partir del formulario
        const formData = new FormData();
        formData.append("action", "deleteAllUser"); // Agregar el campo 'action' con el valor 'addUser'

        fetch('./src/admin/correos.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Recargar la página después del llamado
                window.location.reload();
            })
            .catch(error => console.error('Error:', error));
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
            btnDeleteAllCorreo.disabled = selectedCount < 2;
        }

        // Llama a la función al cargar la págiNna para establecer el estado inicial del botón
        updateButtonState();

        // Añade el evento 'change' a cada checkbox para actualizar el estado del botón en tiempo real
        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', updateButtonState);
        });
    });
</script>