<?php
include_once "modals/sesion.php";
include_once "contacto.php";

$pages_array = [
    "home" => "Home",
    "reservas" => "Reservas",
]
?>

<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a href="index.php">
           <h3> <?php echo SITE_NAME ?></h3> 
        </a>
        <button class=" navbar-toggler hamburger hamburger--collapse" id="toggler_btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <?php
                navbarItem($pages_array, "page");
                ?>
                <a class='nav-link' data-bs-toggle='modal' data-bs-target='#contacto_form' href="#">Contacto</a>";
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sesion">
                    Sesion
                </button>
            </div>
        </div>
    </div>
</nav>
<script>
    const btn_toggler=document.getElementById("toggler_btn");
    btn_toggler.addEventListener("click",(event)=>{
        btn_toggler.classList.toggle("is-active");
    })
</script>