<?php

session_start();
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL, "es_CO");

define('ENVIRONMENT', 'development');
// define('ENVIRONMENT', 'production');

if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}else
{
    error_reporting(0);
    ini_set("display_errors", 0);
}

define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', str_replace("http", "https", URL_PROTOCOL) . URL_DOMAIN . URL_SUB_FOLDER);
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'store');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');
define('RAIZ', realpath(__DIR__ . '/../../'));
define('DS', DIRECTORY_SEPARATOR);
