<?php

namespace App\Traits;

trait ValidatesRequests
{
    public function required($filed) : string
    {
        $file = $this->testInput($filed);
        return !empty($file) === true ? '' :  'is required';
    }

    public function isEmail($email) : string
    {
        $email = $this->testInput($email);
        return ! filter_var($email, FILTER_VALIDATE_EMAIL) === false ? '' : "$email : Invalid email format";
    }

    public function max($filed, $max) : string
    {
        $length = strlen($filed);
        return $length <= $max === true ? '' : "Characters must be less than $max";
    }

    public function min($filed, $min) : string
    {
        $length = strlen($filed);
        return $length >= $min === true ? '' : "The number of characters must be greater than $min";
    }

    private function testInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }
}