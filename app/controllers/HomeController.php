<?php

namespace App\Controllers;

use App\Config\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $content = '../resources/views/index.php';

        $this->view('layouts/master', $content);
    }

    public function details()
    {
        $content = '../resources/views/web/details.php';

        $this->view('layouts/master', $content);
    }

    public function cart()
    {
        $content = '../resources/views/web/cart.php';

        $this->view('layouts/master', $content);
    }

    public function category()
    {
        $content = '../resources/views/web/category.php';

        $this->view('layouts/master', $content);
    }

    public function dashboard()
    {
        $this->view('layouts/dashboard/master');
    }

}