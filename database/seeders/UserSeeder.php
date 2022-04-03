<?php

use App\Config\Database;

class UserSeeder extends Database
{
    public function __construct()
    {
        $sql = "INSERT INTO users 
                    (name, email, password, role_id) 
                VALUES 
                    ('Ahlam', 'admin@gmail.com', md5(123),1);

                INSERT INTO users 
                    (name, email, password, role_id) 
                    VALUES 
                        ('Mohammed', 'user@gmail.com', md5(123),2);";

        $this->pdo->exec($sql);
    }
}