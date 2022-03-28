<?php

namespace App\Models;

use App\Config\Model;

class Author extends Model
{
    const TABLE_NAME = 'authors';

    public static function all()
    {
        return (new Author())->table(self::TABLE_NAME)->get();
    }

    public static function find($id)
    {
        return (new Author) ->table(self::TABLE_NAME)
                            ->where('id', '=',$id)
                            ->get();
    }
}