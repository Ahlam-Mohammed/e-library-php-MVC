<?php

namespace App\Config;

abstract class Middleware
{
    abstract public function execute();
}