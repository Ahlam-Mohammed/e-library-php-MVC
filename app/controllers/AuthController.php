<?php

namespace App\Controllers;

use App\Config\Auth;
use App\Config\Controller;
use App\Config\Request;
use App\Config\Response;
use App\Config\Session;
use App\Models\User;

class AuthController extends Controller
{
    public  $response;
    public $user;
    public $auth;

    public function __construct()
    {
        $this->response = new Response();
        $this->auth     = new Auth();
    }

    public function login()
    {
        $this->loginDB();
        $this->redirect('/');

    }

    public function loginDashboard()
    {
        $this->loginDB();
        $this->redirect('/dashboard-users-index');
    }

    public function dashboardLogin()
    {
        $this->view('dashboard/login');
    }

    public function register()
    {
        User::created(Request::getBody());
        $this->redirect('/');
    }

    public function logout()
    {
        $this->auth->logout();
        $this->redirect('/');
    }

    public function logoutDashboard()
    {
        $this->auth->logout();
        $this->dashboardLogin();
    }

    private function loginDB()
    {
        $this->user = User::findUser($_POST['email']);

        if (empty($this->user))
        {
            $this->response->session->setFlash('danger','Email or password is wrong');
        }
        else {
            if ($this->user[0]['password'] === $_POST['password'])
            {
                $this->response->session->setFlash('success','Thanks for Login');
                $this->response->session->set('user', $this->user[0]['id']);
            }
            else
            {
                $this->response->session->setFlash('danger','password is wrong');
            }
        }
    }

}