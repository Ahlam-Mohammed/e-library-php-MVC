<?php

namespace App\Config;

class Request
{
    public static function getBody()
    {
        $data = [];

        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            foreach ($_GET as $key => $value) {
                $data[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            foreach ($_POST as $key => $value) {
                $data[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $data;
    }

    public static function getFile($nameFile)
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            return $_FILES["$nameFile"];
        }
    }
}