<?php

use App\Config\Route;
use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../routes/web.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__ . '../'));
$dotenv->load();

Route::notFoundHandler(function () {
    echo "Page Not Found";
});

Route::run();