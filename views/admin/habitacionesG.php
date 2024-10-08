<?php
$array_btn_accciones = [
    [
        'name' => 'Edit',
        'icon' => "fa-solid fa-pen-to-square",
        'action' => '',
    ],
    [
        'name' => 'Delete',
        'icon' => "fa-solid fa-trash",
        'action' => '',
    ],
];
?>
<div class="container-fluid justify-content-center ">
    <h2> Tipos de Habitaciones Habitaciones</h2>
    <div class="action-table">
        <button class="btn btn-primary">
            Añadir un nuevo tipo de habitación
            <i class="fa-solid fa-plus"></i>
        </button>

    </div>
    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id de Tipo de Habitaciones</th>
                <th scope="col">Tipo de Habitación</th>
                <th scope="col">Descripción</th>
                <th scope="col">Caracteristicas</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (getRoomInformation() as $index => $array) : ?>

                <tr>
                    <th scope='row'><? echo $index ?></th>
                    <td class='item-table'> ID de tipo de Habitacion </td>
                    <td class='item-table'><?php echo $array['tipo'] ?></td>
                    <td class='item-table'><?php echo $array['descripcion'] ?></td>
                    <td class='item-table'>
                        <?php foreach ($array['caracteristicas'] as $value): ?>
                            <p><?php echo $value ?></p>
                        <?php endforeach; ?>
                    </td>
                    <td class='item-table'><?php echo $array['precio'] ?></td>
                    <td class='item-table d-flex'>
                        <?php foreach ($array_btn_accciones as $key => $data): ?>
                            <button class=" btn btn-success"><i class="<?php echo $data['icon'] ?>"></i></button>
                        <?php endforeach; ?>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>