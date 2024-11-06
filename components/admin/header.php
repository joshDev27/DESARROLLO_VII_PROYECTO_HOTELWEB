<?php

$home_page = ["home" => "Home"];

$srcLogout = './src/logout.php';

?>

<div class="navbar navbar-admin-mobile">

    <button class="hamburger hamburger--slider " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>
    <a href="index.php" class="header-name">
        <h3> Admin Control <?php echo SITE_NAME ?></h3>
    </a>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <a href="index.php">
                <h3> Admin Control <?php echo SITE_NAME ?></h3>
            </a>
            <button class="hamburger hamburger--slider is-active" id="toggle_button" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
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
                <button class="btn btn-primary w-100 shadow-sm" type="submit">Cerrar sesión</button>
            </form>
        </div>
    </div>
</div>

