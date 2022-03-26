<?php

use App\Config\Route;

require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../routes/web.php';

Route::notFoundHandler(function () {
    echo "Page Not Found";
});

Route::run();