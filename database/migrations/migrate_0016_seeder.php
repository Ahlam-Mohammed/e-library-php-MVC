<?php

use App\Config\Database;

class migrate_0016_seeder extends Database
{
    public function up()
    {
        $SQL = "INSERT INTO roles (name) VALUES ('ADMIN');
                INSERT INTO roles (name) VALUES ('USER');
                INSERT INTO users (name, email, password, role_id) VALUES ('Ahlam', 'admin@gmail.com', md5(123),1);
                INSERT INTO users (name, email, password, role_id) VALUES ('Mohammed', 'user@gmail.com', md5(123),2);
                INSERT INTO categories (name,image) VALUES ('cooking','');
                INSERT INTO authors (name) VALUES ('Ahlam Mohammed');
                INSERT INTO publishers (name, phone, country) VALUES ('Dar Al nasher', '773773773', 'Saudi Arabia');";

        $this->pdo->exec($SQL);
    }
}