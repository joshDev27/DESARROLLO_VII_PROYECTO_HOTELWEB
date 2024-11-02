<?php
$array_btn_accciones = [
    [
        'name' => 'Edit',
        'icon' => "fa-solid fa-pen-to-square",
        'action' => '',
        'className' => 'btn-info',
    ],
    [
        'name' => 'Delete',
        'icon' => "fa-solid fa-trash",
        'action' => '',
        'className' => 'btn-danger',
    ],
];
?>
<div class=" body container-fluid justify-content-center " id="container-gestion-habitaciones">
    <div class="header-admin">

        <h2> Tipos de Habitaciones Habitaciones</h2>
    </div>
    <div class="action-table">
        <button class="btn btn-primary">
            Añadir un nuevo tipo de habitación
            <i class="fa-solid fa-plus"></i>
        </button>

    </div>
    <div class="overflow-x-auto">
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
                                <button class=" btn <?php echo $data['className'] ?>"></button>
                            <?php endforeach; ?>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $array['id']; ?>" class="btn btn-info">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="delete.php?id=<?php echo $array['id']; ?>" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>