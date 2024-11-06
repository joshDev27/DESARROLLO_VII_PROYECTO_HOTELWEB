<?php

// Verificar si la cookie ya existe y establecer el estado del navbar
if (!isset($_COOKIE['navBarStatus'])) {
    setcookie("navBarStatus", false, time() + (86400 * 30), "/"); // 86400 = 1 día
}
$home_page = [
    "home" => "Home"
];


$srcLogout = './src/logout.php';

$statusToggleButton = (isset($_COOKIE['navBarStatus']) && $_COOKIE['navBarStatus'] === 'true') ? 'is-active' : '';
$statusNavBar = (isset($_COOKIE['navBarStatus']) && $_COOKIE['navBarStatus'] === 'true') ? 'active' : '';
$statusToggleButtonMobile = (isset($_COOKIE['navBarStatus']) && $_COOKIE['navBarStatus'] === 'true') ? 'is-active' : '';
?>


<nav class="navbar navbar-admin <?php echo $statusNavBar ?>" id="navBar">
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
            navbarItem($home_page, "admin");
            include 'navBarInfoSite.php';
            ?>

        </div>
        <form method="POST" id="formLogout" action=<?php echo $srcLogout ?>>
            <button class="btn btn-primary shadow-sm" type="submit">Cerrar sesión</button>
        </form>

    </div>
</nav>
<div class="navbar d-lg-none navbar-admin-mobile">
    <a href="index.php" class="header-name">
        <h3> Admin Control <?php echo SITE_NAME ?></h3>
    </a>
    <button class="hamburger hamburger--slider " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <a href="index.php">
                <h3> Admin Control <?php echo SITE_NAME ?></h3>
            </a>
            <button class="hamburger hamburger--slider is-active" id="toggle_button_mobile_close" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="navbar-nav flex-column">
                <?php
                navbarItem($home_page, "admin");
                include 'navBarInfoSite.php';
                ?>
            </div>
            <form method="POST" id="formLogout" action=<?php echo $srcLogout ?>>
                <button class="btn btn-primary shadow-sm" type="submit">Cerrar sesión</button>
            </form>
        </div>
    </div>
</div>
<script>

    const toogleButton = document.getElementById("toggle_button");
    toogleButton.addEventListener("click", (e) => {
        $("#navBar").toggleClass("active");
        $("#toggle_button").toggleClass("is-active");
        const isActive = $("#toggle_button").hasClass("is-active");
        document.cookie = "navBarStatus=" + isActive + "; path=/"; // Actualiza la cookie
    });
</script>