<?php

// public/index.php
require_once '../vendor/autoload.php';

use Pedriin647\RadicalErp\Core\Router;

$url = $_GET['url'] ?? '';
$router = new Router();
$router->route($url);

date_default_timezone_set($_ENV['TIMEZONE']);

if ($_ENV['APP_DEBUG'] === 'true') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
}