<?php

$array_img = array();

$con = mysqli_connect('localhost', 'root', '', 'hotel_hotoño');
if ($con === false) {
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}
$sql = "SELECT * FROM imagenes_slider";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $array_img[] = array('alt' => $row['name'], 'img' => $row['img']);
    }
}

?>
<div id="carouselHome" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php

        foreach ($array_img as $index => $array) {
            $extra =   ($index == 0) ?  "class='active' aria-current='true'" : "";
            echo "<button data-bs-target='#carouselHome'
            data-bs-slide-to=$index $extra aria-label='slide $index'> </button>";
        }
        ?>

    </div>
    <div class="carousel-inner">

        <?php
        foreach ($array_img as $index => $array) {
            $active_class =   ($index == 0) ?  "active" : "";
            echo  " 
            <div class='carousel-item $active_class'>
                <span class='container-img'>
                    <img src='{$array['img']}' class='d-block img-fluid' alt='{$array['alt']}'>
                </span>
            </div>
            ";
        }
        ?>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>