<?php

function caracteristicas_hoteles()
{
    $array = [
        [
            "title" => "Habitaciones Inteligentes",
            "description" => "Nuestras habitaciones están equipadas con tecnología avanzada. Disfruta de la comodidad y la tecnología.",
            "img" => "habitaciones_intelligentes.jpg",
        ],
        [
            "title" => "Espacios de Co-Working",
            "description" => "Áreas de trabajo colaborativas diseñadas para fomentar la creatividad. Con acceso a pizarras y conexión a internet de alta velocidad.",
            "img" => "espacios_co-working.jpg",
        ],
        [
            "title" => "Cafetería Tech",
            "description" => "Disfruta de bebidas energizantes y snacks saludables. Un ambiente relajado y cómodos asientos.",
            "img" => "cafeteria_tech.jpg",
        ],
        [
            "title" => "Talleres y Networking",
            "description" => "Aprende de expertos de la industria y expande tu red profesional. Eventos emocionantes en DevHub Retreat.",
            "img" => "talleres_networking.jpg",
        ],
        [
            "title" => "Zona de Recreación",
            "description" => "Relájate en nuestra sala de juegos. Disfruta de consolas de videojuegos y áreas de descanso.",
            "img" => "",
        ],
        [
            "title" => "Compromiso con la Seguridad",
            "description" => "Tu seguridad es nuestra prioridad. Acceso controlado y vigilancia 24/7.",
            "img" => "seguridad.jpg",
        ]
    ];
    return $array;
}

function getRoomInformation()
{
    $rooms = [
        [
            "tipo" => "Habitación Individual",
            "descripcion" => "Ideal para viajeros solitarios, esta habitación ofrece un espacio privado y cómodo.",
            "caracteristicas" => [
                "Cama individual (120 cm)",
                "Conexión Wi-Fi gratuita",
                "Televisión LCD",
                "Baño privado con ducha",
                "Escritorio y espacio de almacenamiento",
                "Superficie: 8 a 12 m²"
            ],
            "precio" => "Desde 72$"
        ],
        [
            "tipo" => "Habitación Doble Estándar (Cama Doble)",
            "descripcion" => "Perfecta para parejas o viajeros que prefieren compartir una cama.",
            "caracteristicas" => [
                "Cama doble (140 cm)",
                "Conexión Wi-Fi gratuita",
                "Televisión LCD",
                "Baño privado con bañera",
                "Superficie: 10 a 11 m²"
            ],
            "precio" => "Desde 107$"
        ],
        [
            "tipo" => "Habitación Doble Estándar (Dos Camas Separadas)",
            "descripcion" => "Ideal para amigos o compañeros de trabajo que prefieren camas separadas.",
            "caracteristicas" => [
                "Dos camas individuales (90 cm)",
                "Conexión Wi-Fi gratuita",
                "Televisión LCD",
                "Baño privado con ducha",
                "Superficie: 10 a 11 m²"
            ],
            "precio" => "Desde 107$"
        ],
        [
            "tipo" => "Habitación Doble Deluxe",
            "descripcion" => "Una opción más espaciosa y lujosa, perfecta para una estancia especial.",
            "caracteristicas" => [
                "Cama doble (160 cm)",
                "Balcón privado",
                "Conexión Wi-Fi gratuita",
                "Televisión LCD",
                "Baño privado con bañera y amenities de lujo",
                "Superficie: 15 a 20 m²"
            ],
            "precio" => "Desde 150$"
        ],
        [
            "tipo" => "Estudio o Apartamento",
            "descripcion" => "Espacio amplio y versátil, ideal para estancias prolongadas o para quienes necesitan un ambiente de trabajo completo.",
            "caracteristicas" => [
                "Cama doble (140 cm) y sofá cama",
                "Cocina equipada",
                "Conexión Wi-Fi gratuita",
                "Televisión LCD",
                "Baño privado con ducha",
                "Superficie: 25 a 30 m²"
            ],
            "precio" => "Desde 200$"
        ]
    ];

    return $rooms;
}

function cardRoomInformation()
{
    $card_room_information = "";
    foreach (getRoomInformation() as $array) {
        $card_room_information .= "
        <div class='card mb-3' style='max-width: 540px;'>
            <div class='row g-0'>
                <div class='col-md-4'>
                    <img src='...' class='img-fluid rounded-start' alt='...'>
                </div>
                <div class='col-md-8'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$array['tipo']}</h5>
                        <p class='card-text'>{$array['descripcion']}</p>";

        foreach ($array['caracteristicas'] as $caracteristica) {
            $card_room_information .= "<p class='card-text'>$caracteristica</p>";
        }

        $card_room_information .= "
                        <p class='btn btn-primary'>{$array['precio']}</p>
                    </div>
                </div>
            </div>
        </div>";
    }

    return $card_room_information;
}

function sendEmailCotizacion()
{
    global $server_name, $user_name, $password, $dbname;

    $con = mysqli_connect($server_name, $user_name, $password, $dbname);

    $to = "leandro.rodriguez@utp.ac.pa, somebodyelse@example.com";
    $subject = "HTML email";

    $message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>This email contains HTML Tags!</p>
    <table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    </tr>
    <tr>
    <td>John</td>
    <td>Doe</td>
    </tr>
    </table>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <webmaster@example.com>' . "\r\n";
    $headers .= 'Cc: myboss@example.com' . "\r\n";

    mail($to, $subject, $message, $headers);
    mysqli_close($con);
}

//Crea los items del navBar
function navbarItem($array, $url_var)
{
    // Verifica la pagina actual 
    if (isset($_GET[$url_var])) {
        $page_actual = $_GET[$url_var];
        $page_actual = preg_replace('/[^a-zA-Z0-9]/', '', $page_actual);
    } else {
        $page_actual = "home";
    }
    //Crea los nav links del nav Bar 
    foreach ($array as $page => $title) {
        $active_class = "";
        if ($page_actual === $page) {
            $active_class = "active";
        }
        echo "  <a class='nav-link $active_class' aria-current='page' href='index.php?$url_var=$page'>$title</a>";
    }
}

//Devuelve los template de las paginas encontradas
function getTemplate($url_var, $root_path)
{
    if (isset($_GET[$url_var])) { // Verificar si se ha pasado una página por URL
        $page = $_GET[$url_var];
        // Filtrar el nombre de la página para evitar inyección
        $page = preg_replace('/[^a-zA-Z0-9]/', '', $page);
        // Ruta del archivo a incluir
        $file = $root_path . $page . '.php';
        // Verificar si el archivo existe y luego incluirlo
        if (file_exists($file)) {
            include $file;
        } else {
            include BASE_PATH.'views/error_page_404.php';
 
        }
        return true;
    }
    return false;
}
