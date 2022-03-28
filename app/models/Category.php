<?php

namespace App\Models;

use App\Config\Model;

class Category extends Model
{
    public static function all()
    {
        return (new Category)->table('categories')->get();
    }
}