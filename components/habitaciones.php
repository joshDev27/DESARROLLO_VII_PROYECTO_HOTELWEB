<div class="container-accordion">
    <h2>Habitaciones</h2>

    <?php

    $accordion_room_information = "<div class='accordion accordion-flush' id='accordionInformacionHabitaciones'>";

    foreach (getRoomInformation() as $index => $array) {
        $accordion_room_information .= "
    <div class='accordion-item'>
        <h2 class='accordion-header'>
            <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#flush-collapse{$index}' aria-expanded='false' aria-controls='flush-collapse{$index}'>
                {$array['tipo']}
            </button>
        </h2>
        <div id='flush-collapse{$index}' class='accordion-collapse collapse' data-bs-parent='#accordionInformacionHabitaciones'>
            <div class='accordion-body'>
                <p>{$array['descripcion']}</p>";

        foreach ($array['caracteristicas'] as $caracteristica) {
            $accordion_room_information .= "<p>$caracteristica</p>";
        }

        $accordion_room_information .= "
                <p class='btn btn-success'>{$array['precio']}</p>
            </div>
        </div>
    </div>";
    }

    $accordion_room_information .= "</div>";

    echo $accordion_room_information;
    ?>
    <div class="reserva-desc">
        <span>
            Para realizar una reserva, visita nuestro sitio web o contacta
            a nuestro equipo de atención al cliente. Estamos aquí para
            ayudarte a encontrar el espacio perfecto para tu estancia en
            DevHub Retreat. ¡Esperamos darte la bienvenida pronto!
        </span>
    </div>
</div>
