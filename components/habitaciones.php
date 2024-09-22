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


<div class="row row-cols-1 row-cols-md-3 container-cards-home-room">
    <div class="col">
        <div class="card w-100" style="width: 18rem;">
            <img src="https://crm.elmenut.com/images/composiciones/2023/08/605/8959-habitacion-juvenil-con-cama-nido-y-mesa..jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card w-100" style="width: 18rem;">
            <img src="https://crm.elmenut.com/images/composiciones/2023/08/605/8959-habitacion-juvenil-con-cama-nido-y-mesa..jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card w-100" style="width: 18rem;">
            <img src="https://crm.elmenut.com/images/composiciones/2023/08/605/8959-habitacion-juvenil-con-cama-nido-y-mesa..jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card w-100" style="width: 18rem;">
            <img src="https://crm.elmenut.com/images/composiciones/2023/08/605/8959-habitacion-juvenil-con-cama-nido-y-mesa..jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card w-100" style="width: 18rem;">
            <img src="https://crm.elmenut.com/images/composiciones/2023/08/605/8959-habitacion-juvenil-con-cama-nido-y-mesa..jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>

<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="card" style="width: 18rem;">
                <img src="https://crm.elmenut.com/images/composiciones/2023/08/605/8959-habitacion-juvenil-con-cama-nido-y-mesa..jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card" style="width: 18rem;">
                <img src="https://crm.elmenut.com/images/composiciones/2023/08/605/8959-habitacion-juvenil-con-cama-nido-y-mesa..jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card" style="width: 18rem;">
                <img src="https://crm.elmenut.com/images/composiciones/2023/08/605/8959-habitacion-juvenil-con-cama-nido-y-mesa..jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card" style="width: 18rem;">
                <img src="https://crm.elmenut.com/images/composiciones/2023/08/605/8959-habitacion-juvenil-con-cama-nido-y-mesa..jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card" style="width: 18rem;">
                <img src="https://crm.elmenut.com/images/composiciones/2023/08/605/8959-habitacion-juvenil-con-cama-nido-y-mesa..jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- If we need pagination -->
<div class="swiper-pagination"></div>

<!-- If we need navigation buttons -->
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>

<!-- If we need scrollbar -->
<div class="swiper-scrollbar"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'vertical',
        loop: true,
        slidesPerView: 4,
        spaceBetween: 10,
        // Responsive breakpoints
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 4,
                spaceBetween: 40
            }
        },
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>