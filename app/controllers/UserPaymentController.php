<?php

namespace App\Controllers;

use App\Config\Controller;
use App\Middleware\AuthMiddleware;

class UserPaymentController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(
            new AuthMiddleware(['index','show','create','store','edit','delete','update','updateIsActive']));
    }
}