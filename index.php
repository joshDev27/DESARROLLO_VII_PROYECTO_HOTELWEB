<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Define the base path for includes
define('BASE_PATH', __DIR__ . '/');

// Include the funtions files file
require BASE_PATH . 'src/function.php';

// Include the configuration file

require_once BASE_PATH . 'config.php';
include  'C:/laragon/www/DESARROLLO_VII_PROYECTO_HOTELWEB/app/controller/user_controller/controller.php';

// Include necessary files

include BASE_PATH . 'database/conection/ConexionDba.php';

require BASE_PATH . 'views/layout.php';

// Include the test file
include_once BASE_PATH . 'test.php';
