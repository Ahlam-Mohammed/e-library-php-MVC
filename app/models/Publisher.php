<?php

namespace App\Models;

use App\Config\Model;

class Publisher extends Model
{
    public static function all()
    {
        return (new Publisher())->table('publishers')->get();
    }
}