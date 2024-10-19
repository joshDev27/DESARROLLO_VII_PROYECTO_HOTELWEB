

<div class="modal fade" id="contacto_form" tabindex="-1" aria-labelledby="contactoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="contactoLabel">Contactenos/Soporte</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-contacto">
                    <form action="./contactos.php" method="POST" class="form">
                        <div class="row row-cols-1 row-cols-md-2">
                            <div class="col">
                                <div class="mb-3 form-floating ">
                                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                                    <label for="nombre" class="form-label">Nombre</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3 form-floating ">
                                    <input type="text" id="apellido" name="appellido" class="form-control" required>
                                    <label for="nombre" class="form-label">Apellido</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 form-floating ">
                            <input type="email" id="email" class="form-control" name="email_c" required>
                            <label for="email" class="form-label">Correo electrónico</label>
                        </div>
                        <div class="mb-3 form-floating ">
                            <textarea id="mensaje" name="mensaje" class="form-control" rows="4" required></textarea>
                            <label for="mensaje" class="form-label">Mensaje</label>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2">
                            <div class="col">
                                <button type="submit" class="btn rounded btn-primary">Enviar</button>
                            </div>
                            <div class="col text-end message">
                                <p> ! Gracias por contáctarnos !</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <p>Nos Comunicaremos lo mas pronto posible</p>
            </div>
        </div>
    </div>
</div>