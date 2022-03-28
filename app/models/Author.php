<?php

namespace App\Models;

use App\Config\Model;

class Author extends Model
{
    public static function all()
    {
        return (new Author())->table('authors')->get();
    }
}