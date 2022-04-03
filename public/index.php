<?php

use App\Config\Auth;
use App\Config\Route;

use App\Config\Session;
use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../session'));
session_start();

$dotenv = Dotenv::createImmutable(dirname(__DIR__ . '../'));
$dotenv->load();

new Auth();

require_once __DIR__ . '/../routes/web.php';


Route::notFoundHandler(function () {
    echo "Page Not Found";
});
//new Session();

Route::run();