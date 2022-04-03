<?php

namespace App\Controllers;

use App\Config\Controller;
use App\Config\Request;
use App\Middleware\AuthMiddleware;
use App\Models\City;

class CityController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(
            new AuthMiddleware(['index','show','create','store','edit','delete','update','updateIsActive']));
    }

    public function index()
    {
        $data = [
            'content' => $this->getPathOfBook('all-cities'),
            'cities'  => City::all()
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function show()
    {
        $data = [
            'content' => $this->getPathOfBook('show-city'),
            'city'    => City::find($_GET['id'])
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function create()
    {
        $data = [
            'content'    => $this->getPathOfBook('create-city')
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function store()
    {
        City::created(Request::getBody());
        $this->redirect('dashboard-cities-index');
    }

    public function edit()
    {
        $data = [
            'content' => $this->getPathOfBook('edit-city'),
            'city'    => City::find($_GET['id'])
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function update()
    {
        $id = Request::getBody()['id'];
        $arrayData = array_slice(Request::getBody(),1);

        City::updated($arrayData,$id);
        $this->redirect('dashboard-cities-index');
    }

    public function delete()
    {
        City::deleted($_GET['id']);
        $this->redirect('dashboard-cities-index');
    }

    public function updateIsActive()
    {
        City::updateActive($_GET['id']);
        $this->redirect('dashboard-cities-index');
    }

    private function getPathDashboard(): string
    {
        return 'layouts/dashboard/master';
    }

    private function getPathOfBook($view): string
    {
        return __DIR__."/../../resources/views/dashboard/cities/$view.php";
    }
}