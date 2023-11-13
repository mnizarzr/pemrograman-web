<?php

require_once './vendor/autoload.php';
require_once './Config/config.php';

use App\Routes\ProductRoutes;

header("Content-Type: application/json; charset=UTF-8");

$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$productRoute = new ProductRoutes;
$productRoute->handle($method, $path);
