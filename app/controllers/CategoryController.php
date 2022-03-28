<?php

namespace App\Controllers;

use App\Config\Controller;
use App\Config\Request;
use App\Models\Category;
use App\Traits\Upload;

class CategoryController extends Controller
{
    use Upload;

    public function index()
    {
        $data = [
            'content'    => $this->getPathOfBook('all-categories'),
            'categories' => Category::all()
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function show()
    {
        $data = [
            'content'    => $this->getPathOfBook('show-category'),
            'category'   => Category::find($_GET['id'])
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function create()
    {
        $data = [
            'content'    => $this->getPathOfBook('create-category')
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function store()
    {
        $this->storeImage(Request::getFile('image'));

        if ($this->uploadOk === 1)
        {
            $arrayDate = array_merge(Request::getBody(), ['image' => $this->new_file_name]);
            Category::created($arrayDate);

            $this->redirect('dashboard-categories');
        }

    }

    public function edit()
    {
        $data = [
            'content'    => $this->getPathOfBook('edit-category'),
            'category'   => Category::find($_GET['id'])
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function update()
    {
        $id = Request::getBody()['id'];
        $arrayData = array_slice(Request::getBody(),1);
        $this->updateImage(Request::getBody()['oldImage'],Request::getFile('image'));

        if ($this->uploadOk === 1)
        {
            unset($arrayData['oldImage']);
            $arrayDate = array_merge($arrayData, ['image' => $this->new_file_name]);

            Category::updated($arrayDate,$id);

            $this->redirect('dashboard-categories');
        }
    }

    public function delete()
    {
        Category::deleted($_GET['id']);
        $this->redirect('dashboard-categories');
    }

    public function updateIsActive()
    {
        Category::updateActive($_GET['id']);
        $this->redirect('dashboard-categories');
    }

    private function getPathDashboard(): string
    {
        return 'layouts/dashboard/master';
    }

    private function getPathOfBook($view): string
    {
        return __DIR__."/../../resources/views/dashboard/categories/$view.php";
    }
}