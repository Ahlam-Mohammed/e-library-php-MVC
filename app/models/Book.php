<?php

namespace App\Models;

use App\Config\Model;

class Book extends Model
{
    const TABLE_NAME = 'books';

    public static function all()
    {
        return (new Book)->table(self::TABLE_NAME)->get();
    }

    public static function find($id)
    {
        return (new Book)   ->table(self::TABLE_NAME)
                            ->where('id', '=',$id)
                            ->get();
    }

    public static function created($data)
    {
        (new Model)->table(self::TABLE_NAME)->create($data);
    }

    public static function updated($data, $id)
    {
        return (new Model) ->table(self::TABLE_NAME)
                    ->value($data)
                    ->where('id', '=',$id)
                    ->update();
    }

//    public function delete($id)
//    {
//        return (new Model())->table(self::TABLE_NAME)
//                            ->delete();
//    }
}