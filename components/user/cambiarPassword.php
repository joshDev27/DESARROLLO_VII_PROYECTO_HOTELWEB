<?php require_once './src/user/usuario.php'; ?>

<div class="modal fade" id="changePasswordUser" tabindex="-1" aria-labelledby="changePasswordUserLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="changePasswordUserLabel">Cambiar Contraseña</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formChangePass">
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" id="id_perfil_change">
          </div>
          <div class="form-group">
            <label for="telefono">New Password</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresa el teléfono" required>
          </div>
          <div class="form-group">
            <label for="direccion">Confirm Password</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa la dirección" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Cambiar</button>
        </div>
      </form>
      <div id="respuesta"></div>
    </div>
  </div>
</div>


<script>
  document.getElementById('formChangePass').addEventListener('submit', function(event) {
    // event.preventDefault(); // Evita el envío tradicional del formulario

    // Crear un objeto FormData a partir del formulario
    const formData = new FormData(this);
    formData.append("action", "changePerfilUser"); // Agregar el campo 'action' con el valor 'addUser'

    const xhr = new XMLHttpRequest();
    xhr.open("POST", './src/user/usuarios.php', true);

    // Manejador para la respuesta del servidor
    xhr.onload = function() {
      if (xhr.status === 200) {
        document.getElementById("respuesta").innerHTML = xhr.responseText;

      } else {
        document.getElementById("respuesta").innerHTML = "Error en la petición";
      }
    };
    // Enviar los datos del formulario
    xhr.send(formData);
  });
</script>