<?php

namespace App\Seeder;

use App\Config\Database;

class CategorySeeder extends Database
{
    public function insert()
    {
        $sql = "INSERT INTO `categories` (`name`, `image`, `created_by`) VALUES
                ('الإدارة والأعمال','1648554552.jpg',1),
                ('الأدب والشعر','1648554417.jpg',1),
                ('القصة والرواية','1648570535.jpg',1),
                ('الصحة العامة ','1648570577.jpg',1),
                ('تطوير الذات','1648571095.jpg',1),
                ('التراجم والسير','1648571118.jpg',1)
                ";

        $this->pdo->exec($sql);
    }
}