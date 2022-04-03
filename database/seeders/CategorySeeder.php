<?php

use App\Config\Database;

class CategorySeeder extends Database
{
    public function __construct()
    {
        $sql = "INSERT INTO categories 
                    (name,image,created_by) 
                VALUES 
                    ('الإدارة والأعمال','1648554552.jpg');
                ";

        $this->pdo->exec($sql);
    }
}