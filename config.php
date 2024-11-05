<?php

// Function to read .env file
function loadEnv($path)
{

    if (!file_exists($path)) {
        throw new Exception(".env file not found");
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);

        if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
            putenv(sprintf('%s=%s', $name, $value));
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }
}




// Load environment variables
loadEnv(__DIR__ . '/.env');

// Define constants using environment variables
define('BASE_URL', getenv('BASE_URL'));
//VARIABLES DE LA BASE DE DATOS
define('DB_HOST', getenv('DB_HOST'));
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASS', getenv('DB_PASS'));
define('DB_PORT', (int)getenv('DB_PORT'));

define('DB_HOST1', 'junction.proxy.rlwy.net');
define('DB_NAME1', 'railway');
define('DB_USER1', 'root');
define('DB_PASS1', 'sZUdFDLzZhlOjOlIAbYlyrEYiVjFwkRF');
define('DB_PORT1', 50528);



// VARIABLES GLOBALES
define('SITE_NAME', getenv('SITE_NAME'));
//VARIABLES DEL CORREO
define('EMAIL_PASS', getenv('EMAIL_PASS'));
define('EMAIL_SENDER', getenv('EMAIL_SENDER'));
define('EMAIL_HOST', getenv('EMAIL_HOST'));

// Derived constants
define('PUBLIC_URL', BASE_URL . '/public');

// You can add more configuration settings here