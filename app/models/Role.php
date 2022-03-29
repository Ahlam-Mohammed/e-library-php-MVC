<?php

namespace App\Models;

use App\Config\Model;

class Role extends Model
{
    const TABLE_NAME = 'roles';

    public static function all()
    {
        return (new Role())->table(self::TABLE_NAME)->get();
    }

    public static function find($id)
    {
        return (new Role()) ->table(self::TABLE_NAME)
                            ->where('id', '=',$id)
                            ->get();
    }

}