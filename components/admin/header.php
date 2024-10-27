<?php

// Iniciar la sesión al principio
session_start();

// Verificar si la cookie ya existe y establecer el estado del navbar
if (!isset($_COOKIE['navBarStatus'])) {
    setcookie("navBarStatus", false, time() + (86400 * 30), "/"); // 86400 = 1 día
}
$pages_array = [
    "home" => "Home",
    "usuarios" => "Usuarios",
    "reservas" => "Reservas",
    "habitacionesG" => "Data Info Habitaciones",
    "habitaciones" => "Habitaciones",
    "informacionGestion" => "Informacion Gestion",
    "correos" => "Correos",
    'reservarHabticacion' => 'Reservar Habitacion',
];

$statusToggleButton = (isset($_COOKIE['navBarStatus']) && $_COOKIE['navBarStatus'] === 'true') ? 'is-active' : '';
$statusNavBar = (isset($_COOKIE['navBarStatus']) && $_COOKIE['navBarStatus'] === 'true') ? 'active' : '';

?>


<nav class="navbar <?php echo $statusNavBar ?>" id="navBar">
    <div class="container-fluid">

        <button class="hamburger hamburger--arrowalt <?php echo $statusToggleButton ?>" id="toggle_button" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

        <a href="index.php">
            <h3> Admin Control <?php echo SITE_NAME ?></h3>
        </a>


        <div class="navbar-nav flex-column">
            <?php
            navbarItem($pages_array, "admin");
            ?>
        </div>
        <a class="btn btn-info" href='#' id="return_site">Go to site </a>

    </div>
</nav>
<script>
    const site = document.getElementById("return_site");
    site.addEventListener("click", (e) => {
        session_destroy();
    });

    const toogleButton = document.getElementById("toggle_button");
    toogleButton.addEventListener("click", (e) => {
        $("#navBar").toggleClass("active");
        $("#toggle_button").toggleClass("is-active");
        const isActive = $("#toggle_button").hasClass("is-active");
        document.cookie = "navBarStatus=" + isActive + "; path=/"; // Actualiza la cookie
    });
</script>