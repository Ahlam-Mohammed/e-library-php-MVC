<?php

namespace App\Controllers;

use App\Config\Controller;
use App\Middleware\AuthMiddleware;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'content'     => __DIR__.'/../../resources/views/index.php',
            'categories'  => Category::all()
        ];
        $this->view($this->getPathWeb(), $data);
    }

    public function details()
    {
        $book = Book::find($_GET['id']);

        $data = [
            'content'    => $this->getPathOfDetailsWeb('details'),
            'book'       => $book,
            'category'   => Category::find($book[0]['category_id']),
            'author'     => Author::find($book[0]['author_id']),
            'publisher'  => Publisher::find($book[0]['publisher_id']),
            'alternative'=> Category::books($book[0]['category_id'])
        ];

        $this->view($this->getPathWeb(), $data);
    }

    public function categories()
    {
        $data = [
            'content'    => $this->getPathOfDetailsWeb('category'),
            'books'      => Category::books($_GET['id']),
            'category'   => Category::find($_GET['id'])
        ];

        $this->view($this->getPathWeb(), $data);
    }

    public function cart()
    {
        $data = [
            'content'     => $this->getPathOfDetailsWeb('cart'),
        ];
        $this->view($this->getPathWeb(), $data);
    }

    private function getPathWeb(): string
    {
        return 'layouts/web/master';
    }

    private function getPathOfDetailsWeb($view): string
    {
        return __DIR__."/../../resources/views/web/$view.php";
    }
}