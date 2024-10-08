<div class="container-fluid " id="reservas">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://i.pinimg.com/564x/2f/f0/a6/2ff0a6dea9bf8329164b9aa8036cdccd.jpg" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2 class="text-center">Reserva tu Habitación</h2>
                <form>
                    <div class="input-group">
                        <div class="form-group">
                            <label for="checkin">Fecha de Entrada</label>
                            <input type="date" class="form-control" id="checkin" required>
                        </div>
                        <span class="align-self-center"><i class="fa-solid fa-arrow-right"></i></span>
                        <div class="form-group">
                            <label for="checkout">Fecha de Salida</label>
                            <input type="date" class="form-control" id="checkout" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-group">
                            <label for="name">Nombre </label>
                            <input type="text" class="form-control" id="name" required>

                        </div>
                        <div class="form-group">
                            <label for="name">Apellido</label>
                            <input type="text" class="form-control" id="apellido_c" required>

                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-group">
                            <label for="email_r">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email_r" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-group">
                            <label for="room-type">Tipo de Habitación</label>
                            <select class="form-control" id="room-type" required>
                                <option value="">Seleccione una opción</option>
                                <?php foreach (getRoomInformation() as $key => $array): ?>
                                    <option value='<?php echo $key ?>'>
                                        <?php echo $array['tipo'] ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="rooms">Número de Habitaciones</label>
                            <input type="number" class="form-control" id="rooms" min="1" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-group">
                            <label for="adults">Adultos</label>
                            <input type="number" class="form-control" id="adults" min="1" required>
                        </div>
                        <div class="form-group">
                            <label for="teenagers">Adolescentes (13-17 años)</label>
                            <input type="number" class="form-control" id="teenagers" min="0">
                        </div>
                        <div class="form-group">
                            <label for="children">Niños (0-12 años)</label>
                            <input type="number" class="form-control" id="children" min="0">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Reservar Habitación</button>
                </form>
            </div>
        </div>
    </div>
</div>