<form id="register-form" style="display: none;" method="POST" action='./src/registro.php'>
    <div class="mb-3">
        <label for="registerName" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="registerName" name="userName" placeholder="Ingresa tu nombre completo" required>
    </div>
    <div class="mb-3">
        <label for="registerEmail" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="registerEmail" name="email" placeholder="Ingresa tu correo" required>
    </div>
    <div class="mb-3">
        <label for="registerPassword" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="registerPassword" name="password" placeholder="Ingresa tu contraseña" required>
    </div>
    <div class="mb-3">
        <label for="confirmPassword" class="form-label"> Confirmar Contraseña</label>
        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Ingresa tu contraseña" required>
    </div>

    <button type="submit" class="btn btn-success w-100">Registrarse</button>
    <div id="respuesta" class="invalid-feedback"></div>
    <div class="text-center mt-3" id="back-to-login">
        <span>¿Ya tienes cuenta? <a href="#" id="show-login-form">Inicia sesión aquí</a></span>
    </div>
</form>

<script>
/*
document.getElementById('register-form').addEventListener('submit', function(event) {
  event.preventDefault(); // Evita el envío tradicional del formulario

  // Crear un objeto FormData a partir del formulario
  const formData = new FormData(this);

  const xhr = new XMLHttpRequest();
  xhr.open("POST", './src/registro.php', true);

  // Manejador para la respuesta del servidor
  xhr.onload = function() {
    if (xhr.status === 200) {
         document.getElementById('respuesta').style.display = 'block';
      document.getElementById("respuesta").innerHTML = xhr.responseText;
    } else {
      document.getElementById('respuesta').style.display = 'block';
      document.getElementById("respuesta").innerHTML = "Error en la petición";
    }
  };

  // Enviar los datos del formulario
  xhr.send(formData);
});
*/
</script>

<script>
/*
  document.getElementById('register-form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Crear un objeto FormData a partir del formulario
    const formData = new FormData(this);

    fetch('./src/registro.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        document.getElementById("respuesta").innerHTML = data;
        // Cerrar el modal después de guardar los cambios
        // var modal = bootstrap.Modal.getInstance(document.getElementById('edit_admin_modal'));
        // modal.hide();
      })
      .catch(error => console.error('Error:', error));
  });*/
</script>