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
                <form id="login-form">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="loginEmail" placeholder="Ingresa tu correo">
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="loginPassword" placeholder="Ingresa tu contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                    <div class="text-center mt-3">
                        <span>¿No tienes cuenta? <a href="#" id="show-register-form">Regístrate aquí</a></span>
                    </div>
                </form>


                <!-- Registration Form (Initially Hidden) -->
                <form id="register-form" style="display: none;">
                    <div class="mb-3">
                        <label for="registerName" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="registerName" name="nombre" placeholder="Ingresa tu nombre completo" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="registerEmail" placeholder="Ingresa tu correo">
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="registerPassword" name="contrasena" placeholder="Ingresa tu contraseña" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerPhone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="registerPhone" name="telefono" placeholder="Ingresa tu teléfono" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerAddress" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="registerAddress" name="direccion" placeholder="Ingresa tu dirección" required>
                    </div>
                    <div class="mb-3">
                            <label for="registerRole" class="form-label">Rol</label>
                        <select class="form-control" id="registerRole" name="rol" required>
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                        </select>
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