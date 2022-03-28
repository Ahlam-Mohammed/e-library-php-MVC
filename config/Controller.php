<?php

namespace App\Config;
use App\Traits\ValidatesRequests;

class Controller
{
    use ValidatesRequests;

    public function view(string $view, $data = [])
    {
        include "../resources/views/" . $view . ".php";
    }

    public function redirect(string $redirect_url)
    {
        header("Location: $redirect_url");
    }
}