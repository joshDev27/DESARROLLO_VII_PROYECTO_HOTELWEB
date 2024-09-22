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
        <div class="row row-cols-1 row-cols-md-3 g-4 features-card-home">
            <?php foreach (caracteristicas_hoteles() as $info)
                echo "  
            <div class='col'>
                <div class='card h-100'>
                    <div class='container-card-title'>
                        <img src=img/{$info['img']} class='card-img opacity-50 ' alt='{$info['title']}'> 
                        <span class='card-img-overlay'>
                            <h5 class='card-title'>{$info['title']}</h5>
                        </span>
                    </div>
                    <div class='card-body'>
                        <p class='card-text '>{$info['title']}</p>
                        <p class='card-text'>{$info['description']}</p>
                    </div>
                </div>
            </div>";
            ?>
        </div>
    </div>
    <?php include "components/habitaciones.php" ?>
</div>