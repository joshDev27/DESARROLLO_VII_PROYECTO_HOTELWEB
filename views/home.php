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
    <?php /// include "components/habitaciones.php" ?>
    <div class="reserva-desc">
        <span>
            Para realizar una reserva, visita nuestro sitio web o contacta
            a nuestro equipo de atención al cliente. Estamos aquí para
            ayudarte a encontrar el espacio perfecto para tu estancia en
            DevHub Retreat. ¡Esperamos darte la bienvenida pronto!
        </span>
    </div>
</div>