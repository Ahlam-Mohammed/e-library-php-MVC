<?php

namespace App\Controllers;

use App\Config\Controller;
use App\Config\Request;
use App\Models\Payment;
use App\Traits\Upload;

class PaymentController extends Controller
{
    use Upload;

    public function index()
    {
        $data = [
            'content'    => $this->getPathOfBook('all-payments'),
            'payments'   => Payment::all()
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function show()
    {
        $data = [
            'content'    => $this->getPathOfBook('show-payment'),
            'payment'    => Payment::find($_GET['id'])
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function create()
    {
        $data = [
            'content'    => $this->getPathOfBook('create-payment')
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function store()
    {
        if ($_FILES['image']['name'] === '')
        {
            Payment::created(Request::getBody());
            $this->redirect('dashboard-payment');
        }
        else
        {
            $this->storeImage(Request::getFile('image'));

            if ($this->uploadOk === 1)
            {
                $arrayDate = array_merge(Request::getBody(), ['image' => $this->new_file_name]);
                Payment::created($arrayDate);

                $this->redirect('dashboard-payments');
            }
        }


    }

    public function edit()
    {
        $data = [
            'content'    => $this->getPathOfBook('edit-payment'),
            'payment'    => Payment::find($_GET['id'])
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function update()
    {
        $id = Request::getBody()['id'];

        if (!(isset(Request::getBody()['oldImage'])) && Request::getFile('image')['name'] === '')
        {
            Payment::updated(Request::getBody(),$id);
            $this->redirect('dashboard-payments');
        }
        else
        {
            $arrayData = array_slice(Request::getBody(),1);
            $this->updateImage(Request::getBody()['oldImage'],Request::getFile('image'));

            if ($this->uploadOk === 1)
            {
                unset($arrayData['oldImage']);
                $arrayDate = array_merge($arrayData, ['image' => $this->new_file_name]);

                Payment::updated($arrayDate,$id);

                $this->redirect('dashboard-payments');
            }
        }

    }

    public function delete()
    {
        Payment::deleted($_GET['id']);
        $this->redirect('dashboard-payments');
    }

    public function updateIsActive()
    {
        Payment::updateActive($_GET['id']);
        $this->redirect('dashboard-payments');
    }

    private function getPathDashboard(): string
    {
        return 'layouts/dashboard/master';
    }

    private function getPathOfBook($view): string
    {
        return __DIR__."/../../resources/views/dashboard/payments/$view.php";
    }
}