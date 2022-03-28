<?php

namespace App\Config;
use App\Traits\ValidatesRequests;

class Controller
{
    use ValidatesRequests;

    public function view(string $view, $data = [])
    {
        include "../resources/views/" . $view . ".php";
    }

    public function redirect(string $redirect_url)
    {
//        $GLOBALS['path'] = $path ;
//        $GLOBALS['session'] = $session;
//        Route::get($redirect_url, function (){
//            $this->view($GLOBALS['path'],$GLOBALS['session']);
//        });
//        Route::run();

        header("Location: $redirect_url");
    }
}