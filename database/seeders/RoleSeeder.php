<?php

use App\Config\Database;

class RoleSeeder extends Database
{
    public function __construct()
    {
        $sql = "INSERT INTO roles (name) VALUES ('ADMIN');
                INSERT INTO roles (name) VALUES ('USER');";

        $this->pdo->exec($sql);
    }
}