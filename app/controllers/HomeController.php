<?php

namespace App\Controllers;

use Config\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = ['a'=>'ahlam'];
        $this->view('index', $data);
    }

    public function about()
    {

    }

    public function contact()
    {
        echo "contact page";
    }
}