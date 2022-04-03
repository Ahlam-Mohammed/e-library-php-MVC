<?php
namespace App\Seeder;
use App\Config\Database;

class UserSeeder extends Database
{
    public function insert()
    {
        $sql = "INSERT INTO users 
                    (name, email, password, role_id) 
                VALUES 
                    ('Ahlam', 'admin@gmail.com', md5(123456789),1);

                INSERT INTO users 
                    (name, email, password, role_id) 
                    VALUES 
                        ('Mohammed', 'user@gmail.com', md5(123456789),2);";

        $this->pdo->exec($sql);
    }
}