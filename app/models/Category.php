<?php

namespace App\Models;

use App\Config\Model;

class Category extends Model
{
    const TABLE_NAME = 'categories';

    public static function all()
    {
        return (new Category)->table(self::TABLE_NAME)->get();
    }

    public static function find($id)
    {
        return (new Category)   ->table(self::TABLE_NAME)
                                ->where('id', '=',$id)
                                ->get();
    }
}