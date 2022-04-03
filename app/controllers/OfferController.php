<?php

namespace App\Controllers;

use App\Config\Controller;
use App\Middleware\AuthMiddleware;
use App\Models\Offer;

class OfferController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(
            new AuthMiddleware(['index','show','create','store','edit','delete','update','updateIsActive']));
    }

//    public function index()
//    {
//        $data = [
//            'content' => $this->getPathOfBook('all-offers'),
//            'books'   => Offer::all()
//        ];
//
//        $this->view($this->getPathDashboard(), $data);
//    }

    public function create()
    {
        $data = [
            'content'  => $this->getPathOfBook('create-offer'),
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    private function getPathDashboard(): string
    {
        return 'layouts/dashboard/master';
    }

    private function getPathOfBook($view): string
    {
        return __DIR__."/../../resources/views/dashboard/offers/$view.php";
    }
}