<?php require './src/admin/usuarios.php'; ?>

<div class="modal fade" id="edit_admin_modal" tabindex="-1" aria-labelledby="reservas_usuarios_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="reservas_usuarios_adminLabel">Editar Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formEditUser">
        <div class="modal-body">
          <input type="hidden" id="edit_user_id" name="user_id">
          <div class="form-group">
            <label for="rol">Rol</label>
            <select class="form-select" name="rol" required>
              <?php foreach ($array_rol as $rol): ?>
                <option id="edit_rol"   value="<?php echo $rol['rl_desc_Rol'] ?>"><?php echo $rol['rl_desc_Rol'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="edit_nombre" value="" name="nombre" placeholder="Ingresa el nombre" required>
          </div>
          <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="edit_apellido" name="apellido" placeholder="Ingresa el apellido" required>
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="edit_email" name="email" placeholder="Ingresa el e-mail" required>
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="edit_telefono" name="telefono" placeholder="Ingresa el teléfono" required>
          </div>
          <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="edit_direccion" name="direccion" placeholder="Ingresa la dirección" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
      <div id="respuesta"></div>
    </div>
  </div>
</div>

<script>

  document.getElementById('formEditUser').addEventListener('submit', function(event) {
    event.preventDefault();

    // Crear un objeto FormData a partir del formulario
    const formData = new FormData(this);
    formData.append("action", "updateUser");
    formData.append("userId", "5"); // Agregar el campo 'userId'
    fetch('./src/admin/usuarios.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        document.getElementById("respuesta").innerHTML = data;
      })
      .catch(error => console.error('Error:', error));
  });
</script>