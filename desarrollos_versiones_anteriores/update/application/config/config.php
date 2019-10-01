<?php

session_start();
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL, "es_CO");

define('ENVIRONMENT', 'development');
// define('ENVIRONMENT', 'production');

if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}
else
{
    error_reporting(0);
    ini_set("display_errors", 0);
}

define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
<<<<<<< HEAD
define('DB_NAME', 'formulario_tiendas');
=======
// define('DB_NAME', 'u775486835_maaji');
define('DB_NAME', 'maaji');
// define('DB_USER', 'u775486835_admin');
>>>>>>> c04965bf8f3e3cd298220d812e59e7835cdef6e9
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');
define('RAIZ', realpath(__DIR__ . '/../../'));
define('DS', DIRECTORY_SEPARATOR);

define('EMAIL_ADMIN', 'juandeveloper1990@gmail.com');
define('EMAIL_ADMIN_PASS', '112845325790122363049');
define('EMAIL_ALIAS', 'TIENDAS MAAJI');

require APP . 'libs/e.php';
