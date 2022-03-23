<?php



use App\Controllers\HomeController;
use Config\Router;
require_once __DIR__ . '/vendor/autoload.php';

$router = new Router();

$router->get('/', [HomeController::class, 'index']);
$router->get('/validation', [HomeController::class, 'valid']);
$router->get('/about', [HomeController::class, 'about']);
$router->get('/contact', [HomeController::class, 'contact']);


$router->notFoundHandler(function () {
    echo "Page Not Found";
});

$router->run();