<?php
$array_info_nav = [
    "informacionGestion" => "Informacion Del Site",
    "habitacionesG" => "Data Info Habitaciones",
];

$pages_array = [
    "usuarios" => "Usuarios",
    "reservas" => "Reservas",
    "correos" => "Correos",
    "habitaciones" => "Habitaciones",
];


?>
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Consultas Site
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <?php navbarItem($pages_array, "admin"); ?>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Info de Site
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <?php navbarItem($array_info_nav, "admin"); ?>
            </div>
        </div>
    </div>
</div>