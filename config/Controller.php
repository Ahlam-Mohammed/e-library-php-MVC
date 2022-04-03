<?php

namespace App\Config;
use App\Traits\ValidatesRequests;


class Controller
{
    use ValidatesRequests;

    protected $middlewares = [];
    public $action = '';


    public function view(string $view, $data = [])
    {
        include "../resources/views/" . $view . ".php";
    }

    public function redirect(string $redirect_url)
    {
        header("Location: $redirect_url");
    }

    public function registerMiddleware(Middleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}