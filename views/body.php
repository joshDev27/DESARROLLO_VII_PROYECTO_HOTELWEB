<?php

if (ADMINISTRATOR) {
    $root_path = BASE_PATH."views/admin/";
    //devuelve true si el la pagina se encontro
    if (getTemplate("admin", $root_path)) {
    } else {
        include BASE_PATH."views/admin/home.php"; // Página por defecto
    }
} else {
    $root_path = BASE_PATH."views/";
    //devuelve true si el la pagina se encontro
    if (getTemplate("page", $root_path)) {
    } else {
        include BASE_PATH."views/home.php"; // Página por defecto
    }
}
?>