<?php

namespace App\Controller;

class HomeController
{
    public function index()
    {
//        echo "Hello Word";
        require_once "resources/views/index.php";
    }

    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }
}