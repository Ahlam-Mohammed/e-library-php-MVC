<?php

namespace App\Controllers;

use App\Config\Controller;
use App\Config\Request;
use App\Models\Role;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'content' => $this->getPathOfBook('all-users'),
            'users'   => User::all()
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function show()
    {
        $user = User::find($_GET['id']);

        $data = [
            'content'    => $this->getPathOfBook('show-user'),
            'user'       => $user,
            'role'       => Role::find($user[0]['role_id'])
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function create()
    {
        $data = [
            'content'    => $this->getPathOfBook('create-user'),
            'roles'      => Role::all()
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function store()
    {
        User::created(Request::getBody());
        $this->redirect('dashboard-users');
    }

    public function edit()
    {
        $data = [
            'content'    => $this->getPathOfBook('edit-user'),
            'user'       => User::find($_GET['id']),
            'roles'      => Role::all()
        ];

        $this->view($this->getPathDashboard(), $data);
    }

    public function update()
    {
        $id = Request::getBody()['id'];
        $arrayData = array_slice(Request::getBody(),1);

        User::updated($arrayData,$id);
        $this->redirect('dashboard-users');
    }

    public function delete()
    {
        User::deleted($_GET['id']);
        $this->redirect('dashboard-users');
    }

    public function updateIsActive()
    {
        User::updateActive($_GET['id']);
        $this->redirect('dashboard-users');
    }

    private function getPathDashboard(): string
    {
        return 'layouts/dashboard/master';
    }

    private function getPathOfBook($view): string
    {
        return __DIR__."/../../resources/views/dashboard/users/$view.php";
    }
}