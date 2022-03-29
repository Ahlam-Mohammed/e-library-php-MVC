<?php

namespace App\Controllers;

use App\Config\Controller;
use App\Models\Book;
use App\Models\Category;

class HomeController extends Controller
{

    public function index()
    {
        $data = [
            'content'     => __DIR__.'/../../resources/views/index.php',
            'categories'  => Category::all()
        ];

        $this->view('layouts/web/master', $data);
    }

}