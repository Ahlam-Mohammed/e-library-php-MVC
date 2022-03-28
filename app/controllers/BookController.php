<?php

namespace App\Controllers;

use App\Config\Controller;
use App\Config\Request;
use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\Category;
use App\Traits\Upload;

class BookController extends Controller
{
    use Upload;

    public function index()
    {
        $data = [
            'content' => $this->getPathOfBook('all-books'),
            'books'   => Book::all()
        ];

        $this->view('layouts/dashboard/master', $data);
    }

    public function create()
    {
        $data = [
            'content'    => $this->getPathOfBook('create-book'),
            'categories' => Category::all(),
            'authors'    => Author::all(),
            'publishers' => Publisher::all()
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function store()
    {
        $this->storeImage(Request::getFile('image'));

        if ($this->uploadOk === 1)
        {
            $arrayDate = array_merge(Request::getBody(), ['image' => $this->new_file_name]);
            Book::created($arrayDate);

            $this->redirect('dashboard-books','layouts/dashboard/master');
        }

    }

    public function edit()
    {
        $data = [
            'content'    => $this->getPathOfBook('edit-book'),
            'book'       => Book::find($_GET['id']),
            'categories' => Category::all(),
            'authors'    => Author::all(),
            'publishers' => Publisher::all()
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

            Book::updated($arrayDate,$id) ;
//            === true ?
//                $session = ['success' => 'Updated Book successful'] :
//                $session = ['danger'  => 'oops update error'];

            $this->redirect('dashboard-books');
        }
    }

    public function delete()
    {

    }

    private function getPathDashboard(): string
    {
        return 'layouts/dashboard/master';
    }

    private function getPathOfBook($view): string
    {
        return __DIR__."/../../resources/views/dashboard/books/$view.php";
    }
}