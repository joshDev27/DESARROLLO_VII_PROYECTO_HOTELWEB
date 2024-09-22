<div class="container-fluid " id="reservas">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Reserva tu Habitación</h2>
                <form>
                    <div class="form-group">
                        <label for="checkin">Fecha de Entrada</label>
                        <input type="date" class="form-control" id="checkin" required>
                    </div>
                    <div class="form-group">
                        <label for="checkout">Fecha de Salida</label>
                        <input type="date" class="form-control" id="checkout" required>
                    </div>
                    <div class="form-group">
                        <label for="room-type">Tipo de Habitación</label>
                        <select class="form-control" id="room-type" required>
                            <option value="">Seleccione una opción</option>
                            <option value="single">Individual</option>
                            <option value="double">Doble</option>
                            <option value="suite">Suite</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="rooms">Número de Habitaciones</label>
                        <input type="number" class="form-control" id="rooms" min="1" required>
                    </div>
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
                    <div class="form-group">
                        <label for="name">Nombre y Apellido</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email_r">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email_r" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="tel" class="form-control" id="phone" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Reservar Habitación</button>
                </form>
            </div>
        </div>
    </div>
</div>