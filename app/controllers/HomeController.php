<?php

namespace App\Controllers;

use Config\Controller;

class HomeController extends Controller
{

    public function valid()
    {
        // Required
        $data = "  ";
        $msg = $this->required($data);

        if (empty($msg)) echo "done";
        else echo $msg;

        // isEmail
//        $data = "ahlam@gmailcom";
//        $msg = $this->isEmail($data);
//
//        if (empty($msg)) echo "done";
//        else echo $msg;

        //Max Length
//        $data = "ahlddd";
//        $msg = $this->max($data,3);
//
//        if (empty($msg)) echo "done";
//        else echo $msg;

        //Min Length
//        $data = "ad";
//        $msg = $this->min($data,3);
//
//        if (empty($msg)) echo "done";
//        else echo $msg;
    }

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