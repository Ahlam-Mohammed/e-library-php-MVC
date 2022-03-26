<?php

namespace App\Config;
use App\Traits\ValidatesRequests;

class Controller
{
    use ValidatesRequests;

    public function view(string $view, $data = [])
    {
        require_once "../resources/views/" . $view . ".php";
    }
}