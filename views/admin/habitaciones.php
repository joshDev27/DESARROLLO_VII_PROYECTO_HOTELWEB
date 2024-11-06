<?php require './src/admin/habitaciones.php'; ?>

<div class=" body container-fluid justify-content-center " id="container-habitaciones">
    <h2> Tipos de Habitaciones Habitaciones</h2>

    <div class="overflow-x-auto">
        <table class="table table-light table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">numero de habitacion</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Cantidad de camas </th>
                    <th scope="col">Estado</th>
                    <th scope="col">Usuario Ocupado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arrayDatosPorPagina as $index => $array) : ?>

                    <tr>
                        <th scope='row'><? echo $index ?></th>
                        <td class='item-table'><?php echo $array['numeroDeHabitacion'] ?></td>
                        <td class='item-table'><?php echo $array['tipo'] ?></td>
                        <td class='item-table'><?php echo $array['cantiadDeCamas'] ?></td>
                        <td class='item-table'><?php echo $array['estado'] ?></td>
                        <td class='item-table'><?php echo $array['huesped'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php include './components/pagination.php' ?>
</div>