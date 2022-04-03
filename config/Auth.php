<?php

namespace App\Config;

use App\Enum\RoleEnum;
use App\Models\User;

class Auth
{
    private $response;
    public static $auth;

    public function __construct()
    {
        $this->response = new Response();
        $userId = $this->response->session->get('user');
        if ($userId) {
            self::$auth = User::find($userId);
        }
    }

    public static function isGuest()
    {
        return self::$auth;
    }

    public static function name()
    {
        return self::$auth[0]['name'];
    }

    public static function email()
    {
        return self::$auth[0]['email'];
    }

    public static function role()
    {
        if (self::$auth[0]['role_id'] === RoleEnum::ADMIN_ROLE)
            return 'Admin';
        else
            return 'User';
    }

    public static function id()
    {
        return Session::get('user');
    }

    public function logout()
    {
        self::$auth = null;
        $this->response->session->remove('user');
    }
}