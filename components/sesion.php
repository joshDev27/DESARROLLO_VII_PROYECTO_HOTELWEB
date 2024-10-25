<?php
require_once './src/login.php';
require_once './src/registro.php';
?>


<!-- Modal -->
<div class="modal fade" id="sesion" tabindex="-1" aria-labelledby="sesionLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-4" id="sesionLabel">Iniciar Sesión</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Login Form -->
                <form id="login-form" method="POST" action="./src/login.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="loginUser" class="form-label">Correo Electrónico</label>
                        <input type="text" class="form-control" id="loginUser" name="userName" placeholder="Ingresa tu correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="loginPassword" placeholder="Ingresa tu contraseña" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                    <div class="text-center mt-3">
                        <span>¿No tienes cuenta? <a href="#" id="show-register-form">Regístrate aquí</a></span>
                    </div>
                </form>


                <!-- Registration Form (Initially Hidden) -->
                <form id="register-form" style="display: none;" method="POST" action="./src/registro.php" enctype="multipart/form-data">
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
                    <div class="text-center mt-3" id="back-to-login">
                        <span>¿Ya tienes cuenta? <a href="#" id="show-login-form">Inicia sesión aquí</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript to toggle between forms -->
<script>
    document.getElementById('show-register-form').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('login-form').style.display = 'none';
        document.getElementById('register-form').style.display = 'block';
        document.getElementById('back-to-login').style.display = 'block';
        document.getElementById('sesionLabel').textContent = 'Registro';
    });

    document.getElementById('show-login-form').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('login-form').style.display = 'block';
        document.getElementById('register-form').style.display = 'none';
        document.getElementById('back-to-login').style.display = 'none';
        document.getElementById('sesionLabel').textContent = 'Iniciar Sesión';
    });
</script>