<?php

namespace App\Models;

use App\Config\Model;

class Publisher extends Model
{
    const TABLE_NAME = 'publishers';

    public static function all()
    {
        return (new Publisher())->table(self::TABLE_NAME)->get();
    }

    public static function find($id)
    {
        return (new Publisher)  ->table(self::TABLE_NAME)
                                ->where('id', '=',$id)
                                ->get();
    }
}