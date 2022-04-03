<?php

namespace App\Middleware;

use App\Config\Auth;
use App\Config\ForbiddenException;
use App\Config\Middleware;

class AuthMiddleware extends Middleware
{
    public $action = [];

    public function __construct($action = [])
    {
        $this->action = $action;
    }

    /**
     * @throws ForbiddenException
     */
    public function execute()
    {
        if (empty(Auth::isGuest()))
        {
            if (!empty($this->action))
            {
                foreach ($this->action as $action) {
                    if (str_contains($_SERVER['REQUEST_URI'], $action)) {
                        header("Location: /dashboard-login");
                    }
                }
            }
        }
    }
}