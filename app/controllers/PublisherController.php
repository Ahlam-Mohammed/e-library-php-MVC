<?php

namespace App\Controllers;

use App\Config\Controller;
use App\Config\Request;
use App\Middleware\AuthMiddleware;
use App\Models\Publisher;
use App\Traits\Upload;

class PublisherController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(
            new AuthMiddleware(['index','show','create','store','edit','delete','update','updateIsActive']));
    }

    use Upload;

    public function index()
    {
        $data = [
            'content'    => $this->getPathOfBook('all-publishers'),
            'publishers' => Publisher::all()
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function show()
    {
        $data = [
            'content'    => $this->getPathOfBook('show-publisher'),
            'publisher'   => Publisher::find($_GET['id'])
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function create()
    {
        $data = [
            'content'    => $this->getPathOfBook('create-publisher')
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function store()
    {
        if ($_FILES['image']['name'] === '')
        {
            Publisher::created(Request::getBody());
            $this->redirect('dashboard-publishers-index');
        }
        else
        {
            $this->storeImage(Request::getFile('image'));

            if ($this->uploadOk === 1)
            {
                $arrayDate = array_merge(Request::getBody(), ['image' => $this->new_file_name]);
                Publisher::created($arrayDate);

                $this->redirect('dashboard-publishers-index');
            }
        }


    }

    public function edit()
    {
        $data = [
            'content'    => $this->getPathOfBook('edit-publisher'),
            'publisher'   => Publisher::find($_GET['id'])
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function update()
    {
        $id = Request::getBody()['id'];

        if (!(isset(Request::getBody()['oldImage'])) && Request::getFile('image')['name'] === '')
        {
            Publisher::updated(Request::getBody(),$id);
            $this->redirect('dashboard-publishers-index');
        }
        else
        {
            $arrayData = array_slice(Request::getBody(),1);
            $this->updateImage(Request::getBody()['oldImage'],Request::getFile('image'));

            if ($this->uploadOk === 1)
            {
                unset($arrayData['oldImage']);
                $arrayDate = array_merge($arrayData, ['image' => $this->new_file_name]);

                Publisher::updated($arrayDate,$id);

                $this->redirect('dashboard-publishers-index');
            }
        }

    }

    public function delete()
    {
        Publisher::deleted($_GET['id']);
        $this->redirect('dashboard-publishers-index');
    }

    public function updateIsActive()
    {
        Publisher::updateActive($_GET['id']);
        $this->redirect('dashboard-publishers-index');
    }

    private function getPathDashboard(): string
    {
        return 'layouts/dashboard/master';
    }

    private function getPathOfBook($view): string
    {
        return __DIR__."/../../resources/views/dashboard/publishers/$view.php";
    }
}