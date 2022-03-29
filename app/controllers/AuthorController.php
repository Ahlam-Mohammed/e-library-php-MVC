<?php

namespace App\Controllers;

use App\Config\Controller;
use App\Config\Request;
use App\Models\Author;
use App\Traits\Upload;

class AuthorController extends Controller
{
    use Upload;

    public function index()
    {
        $data = [
            'content'    => $this->getPathOfBook('all-authors'),
            'authors'    => Author::all()
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function show()
    {
        $data = [
            'content'    => $this->getPathOfBook('show-author'),
            'author'     => Author::find($_GET['id'])
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function create()
    {
        $data = [
            'content'    => $this->getPathOfBook('create-author')
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function store()
    {
        Author::created(Request::getBody());
        $this->redirect('dashboard-authors');
    }

    public function edit()
    {
        $data = [
            'content'    => $this->getPathOfBook('edit-author'),
            'author'     => Author::find($_GET['id'])
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function update()
    {
        $id = Request::getBody()['id'];
        $arrayData = array_slice(Request::getBody(),1);

        Author::updated($arrayData,$id);
        $this->redirect('dashboard-authors');
    }

    public function delete()
    {
        Author::deleted($_GET['id']);
        $this->redirect('dashboard-authors');
    }

    public function updateIsActive()
    {
        Author::updateActive($_GET['id']);
        $this->redirect('dashboard-authors');
    }

    private function getPathDashboard(): string
    {
        return 'layouts/dashboard/master';
    }

    private function getPathOfBook($view): string
    {
        return __DIR__."/../../resources/views/dashboard/authors/$view.php";
    }
}