<?php
require_once "./src/reservas.php";
?>

<div class="container-fluid container-reservas" id="reservas">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center">Reserva tu Habitación</h2>
                <form action="" method="POST" enctype="multipart/form-data" id="reservas_home_form">
                    <div class="input-group">
                        <div class="form-group">
                            <label for="checkin">Fecha de Entrada</label>
                            <input type="date" class="form-control" id="checkin" name="checkIn" required>
                        </div>
                        <span class="align-self-center"><i class="fa-solid fa-arrow-right"></i></span>
                        <div class="form-group">
                            <label for="checkout">Fecha de Salida</label>
                            <input type="date" class="form-control" id="checkout" name="checkOut" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-group">
                            <label for="name">Nombre </label>
                            <input type="text" class="form-control" id="name" name="firstName" required>

                        </div>
                        <div class="form-group">
                            <label for="name">Apellido</label>
                            <input type="text" class="form-control" id="apellido_c" name="lastName" required>

                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-group">
                            <label for="email_r">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email_r" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="tel" class="form-control" id="phone" name="phoneNumber" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-group">
                            <label for="room-type">Tipo de Habitación</label>
                            <select class="form-control" id="room-type" required name="roomType">
                                <option value="">Seleccione una opción</option>
                                <?php foreach (getRoomInformation() as $key => $array): ?>
                                    <option value='<?php echo $array['id'] ?>'>
                                        <?php
                                        $tipo_habitacion_activo = $array['id'];
                                        echo $array['tipo']
                                        ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <p><?php echo $tipo_habitacion_activo ?></p>
                        <div class="form-group">
                            <label for="rooms">Número de Habitaciones</label>
                            <input type="number" class="form-control" id="rooms" min="1" max='50' name="cantRoom" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-group">
                            <label for="adults">Adultos</label>
                            <input type="number" class="form-control" id="adults" min="1" max='50' name="cantAdults" required>
                        </div>
                        <div class="form-group">
                            <label for="teenagers">Adolescentes <span>(13-17 años)</span> </label>
                            <input type="number" class="form-control" id="teenagers" min="0" max='50' name="cantTeen">
                        </div>
                        <div class="form-group">
                            <label for="children">Niños <span>(0-12 años)</span> </label>
                            <input type="number" class="form-control" id="children" min="0" max='50' name="cantChild">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Cotizar Habitación</button>
                </form>
            </div>
            <div class="col-md-6">
                <?php foreach (getRoomInformation() as $key => $array): ?>
                    <?php if ($array['id'] === $tipo_habitacion_activo): ?>
                        <span>
                            <img src=<?php echo $array['img'] ?> class="img-fluid">
                        </span>
                        <span class="container-desc">
                            <p><?php echo $array['descripcion'] ?></p>
                            <span>
                                <?php foreach ($array['caracteristicas'] as $data): ?>
                                    <p><?php echo $data ?></p>
                                <?php endforeach; ?>
                                <?php if (isset($array['iconos'])): ?>
                                    <?php foreach ($array['iconos'] as $icono): ?>
                                        <span><?php echo $icono ?></span>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <p><?php echo $tipo_habitacion_activo ?></p>
                            </span>
                        </span>
                    <?php endif; ?>
                <?php endforeach ?>
            </div>
            <div id="respuesta"></div>
        </div>
    </div>
</div>

<script>
    document.getElementById('reservas_home_form').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el envío tradicional del formulario

        // Crear un objeto FormData a partir del formulario
        const formData = new FormData(this);
        const xhr = new XMLHttpRequest();

        xhr.open('POST', './src/reservas.php', true);

        // Manejador para la respuesta del servidor
        xhr.onload = function() {
            if (xhr.status === 200) {
                document.getElementById('respuesta').innerHTML = xhr.responseText;
            } else {
                document.getElementById('respuesta').innerHTML = 'Error en la petición';
            }
        };

        // Enviar los datos del formulario
        xhr.send(formData);
    });
</script>