<?php

namespace App\Controllers;

use App\Config\Controller;
use App\Config\Request;
use App\Config\Session;
use App\Middleware\AuthMiddleware;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(
            new AuthMiddleware(['profile']));
    }

    public function profile()
    {
        $data = [
            'content' => $this->getPathOfSetting('profile')
        ];
        $this->view($this->getPathDashboard(), $data);
    }

    public function profileUpdate()
    {
        $id = Session::get('user');

        User::updated(Request::getBody(),$id);
        $this->redirect('user-profile');
    }

    public function resetPassword()
    {
        $id = Session::get('user');

        User::updated(Request::getBody(),$id);
        $this->redirect('user-profile');
    }

    private function getPathDashboard(): string
    {
        return 'layouts/dashboard/master';
    }

    private function getPathOfSetting($view): string
    {
        return __DIR__."/../../resources/views/dashboard/setting/$view.php";
    }
}