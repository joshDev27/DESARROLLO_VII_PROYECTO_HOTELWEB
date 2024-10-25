<div id="home" class="">

    <?php

    include "components/carousel.php";
    ?>

    <div class="container-description">
        <span class="description">
            ¡Descubre DevHub Retreat! Un refugio seguro y creativo para programadores y profesionales de la tecnología. Ubicado en un entorno inspirador, nuestro hotel fomenta la innovación y la colaboración.
        </span>
    </div>
    <div class="container-card-hotel-features">
        <h2>Ofrecemos</h2>

        <div class="row row-cols-1 row-cols-md-3 features-card-home">
            <?php foreach (caracteristicas_hoteles() as $info)
                echo "  
                <div class='col'>
                    <div class='card w-100'>
                        <img src='./public/img/{$info['img']}' class='card-img-top' alt='{$info['title']}'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$info['title']}</h5>
                            <p class='card-text'>{$info['description']}</p>
                        </div>
                    </div>
                </div>
            ";
            ?>
        </div>
    </div>
    <!-- Slider main container -->
    <div class="swiper-container container-fluid">
        <h2>Habitaciones</h2>
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach (getRoomInformation() as $index => $array) : ?>
                    <div class="swiper-slide">
                        <div class='card w-100'>
                            <span class="img-container">
                                <img src=<?php echo $array['img'] ?> class='img-fluid' alt=<?php echo $array['tipo'] ?>>
                            </span>
                            <div class='card-body justify-content-center'>
                                <h5 class='card-title'> <?php echo $array['tipo'] ?></h5>
                                <p class='card-text'>
                                    <?php echo $array['descripcion'] ?>
                                </p>
                                <span>
                                    <!-- <?php
                                            foreach ($array['caracteristicas'] as $caracteristica) {
                                                echo "<p>$caracteristica</p>";
                                            }
                                            ?> -->
                                </span>
                                <a href="http://localhost/DESARROLLO_VII_PROYECTO_HOTELWEB/index.php?page=reservas">
                                    <button class="btn-primary btn"> Reservar </button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="reserva-desc">
        <span>
            Para realizar una reserva, visita nuestro sitio web o contacta
            a nuestro equipo de atención al cliente. Estamos aquí para
            ayudarte a encontrar el espacio perfecto para tu estancia en
            DevHub Retreat. ¡Esperamos darte la bienvenida pronto!
        </span>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const swiper = new Swiper('.swiper', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 2,
            speed: 500,
            autoplay: {
                delay: 5000,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                480: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 30
                }
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>