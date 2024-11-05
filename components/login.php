<?php require_once './src/login.php'; ?>


<form id="login-form" method="POST" class="needs-validation" >
    <div class="mb-3">
        <label for="loginUser" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="loginUser" name="userName" placeholder="Ingrese su usuario" required>
    </div>
    <div class="mb-3">
        <label for="loginPassword" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="loginPassword" placeholder="Ingresa tu contraseña" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
    <div id="respuesta" class="invalid-feedback"></div>
    <div class="text-center mt-3">
        <span>¿No tienes cuenta? <a href="#" id="show-register-form">Regístrate aquí</a></span>
    </div>
</form>

<script>
    document.getElementById('login-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el envío tradicional del formulario

        // Crear un objeto FormData a partir del formulario
        const formData = new FormData(this);

        const xhr = new XMLHttpRequest();
        xhr.open("POST", './src/login.php', true);

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

    
</script>