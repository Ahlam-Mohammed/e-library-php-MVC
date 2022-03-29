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
        return (new Author())   ->table(self::TABLE_NAME)
                                ->where('id', '=',$id)
                                ->get();
    }

    public static function created($data)
    {
        (new Author())->table(self::TABLE_NAME)->create($data);
    }

    public static function updated($data, $id): bool
    {
        return (new Author())   ->table(self::TABLE_NAME)
                                ->value($data)
                                ->where('id', '=',$id)
                                ->update();
    }

    public static function deleted($id): bool
    {
        return (new Author())   ->table(self::TABLE_NAME)
                                ->where('id', '=', $id)
                                ->delete();
    }

    public static function updateActive($id): bool
    {
        return (new Author())   ->table(self::TABLE_NAME)
                                ->where('id', '=', $id)
                                ->UpdateIsActive();
    }
}