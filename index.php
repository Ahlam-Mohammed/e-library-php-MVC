<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controller\HomeController;
use App\Router;

$router = new Router();

$router->get('/', [HomeController::class, 'index']);
$router->get('/about', [HomeController::class, 'about']);
$router->get('/contact', [HomeController::class, 'contact']);


$router->notFoundHandler(function () {
    echo "Page Not Found";
});

$router->run();