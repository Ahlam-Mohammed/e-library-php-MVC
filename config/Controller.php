<?php

namespace Config;
use App\Traits\Upload;

class Controller
{
    use Upload;

    public function view(string $view, $data = [])
    {
        require_once "resources/views/" . $view . ".php";
    }
}