<?php

require_once './vendor/autoload.php';
require_once './Config/config.php';

use App\Routes\AuthorRoutes;
use App\Routes\BookLoanRoutes;
use App\Routes\BookRoutes;
use App\Routes\GenreRoutes;
use App\Routes\UserRoutes;

header("Content-Type: application/json; charset=UTF-8");

$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

(new AuthorRoutes)->handle($method, $path);
(new BookLoanRoutes)->handle($method, $path);
(new BookRoutes)->handle($method, $path);
(new GenreRoutes)->handle($method, $path);
(new UserRoutes)->handle($method, $path);
