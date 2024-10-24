<?php
$pages_array = [
    "home" => "Home",
    "users" => "Usuarios",
    "reservas" => "Reservas",
    "habitacionesG" => "Data Info Habitaciones",
    "habitaciones" => "Habitaciones",
    "informacion_gestion" => "Informacion Gestion",
]
?>

<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a href="index.php">
            <h3> Admin Control <?php echo SITE_NAME ?></h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarAdmin" aria-controls="navBarAdmin" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navBarAdmin">
            <div class="navbar-nav">
                <?php
                navbarItem($pages_array, "admin");
                ?>
                <a class="btn btn-info" href='index.php?page=home' id="return_site">Go to site </a>
            </div>
        </div>
    </div>
</nav>
<script>
    const site = document.getElementById("return_site");
    site.addEventListener("click", (e) => {
        session_destroy();
    })
</script>