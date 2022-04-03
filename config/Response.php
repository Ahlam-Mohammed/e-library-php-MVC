<?php

namespace App\Config;

class Response
{
    public $session;

    public function __construct()
    {
        $this->session = new Session();
    }
}