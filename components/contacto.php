<?php
// require_once './src/contacto.php';
?>

<div class="modal fade" id="contacto_form" tabindex="-1" aria-labelledby="contactoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="contactoLabel">Contactenos/Soporte</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-contacto">
                    <form method="POST" action="./src/contacto.php" enctype="multipart/form-data" class="form">
                        <div class="row row-cols-1 row-cols-md-2">
                            <div class="col">
                                <div class="mb-3 form-floating ">
                                    <input type="text" id="firstName" name="firstName" class="form-control" required>
                                    <label for="firstName" class="form-label">Nombre</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3 form-floating ">
                                    <input type="text" id="lastName" name="lastName" class="form-control" required>
                                    <label for="lastName" class="form-label">Apellido</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 form-floating ">
                            <input type="email" id="email" class="form-control" name="email" required>
                            <label for="email" class="form-label">Correo electrónico</label>
                        </div>
                        <div class="mb-3 form-floating ">
                            <textarea id="mensaje" name="mensaje" class="form-control" rows="4" required></textarea>
                            <label for="mensaje" class="form-label">Mensaje</label>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2">
                            <div class="col">
                                <button type="submit" class="btn rounded btn-primary">Enviar</button>
                                <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>
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


<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img  class="rounded me-2" alt="...">
            <strong class="me-auto">Alert!</strong>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <?php echo $alert_message ?>
        </div>
    </div>
</div>
