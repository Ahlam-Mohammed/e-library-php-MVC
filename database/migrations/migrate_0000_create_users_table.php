<?php

use App\Config\Database;

class migrate_0000_create_users_table extends Database
{

    public function up()
    {
        $SQL = "CREATE TABLE IF NOT EXISTS `users` (
                    `id` INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    `name` VARCHAR(255) NOT NULL,
                    `email` VARCHAR(255) NOT NULL,
                    `password` VARCHAR(255) NOT NULL,
                    `is_active` TINYINT(1) NOT NULL DEFAULT 1,
                    `is_deleted` TINYINT(1) NOT NULL DEFAULT 0,
                    `role_id` INT(1) NOT NULL,
                    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
                    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP()
                ) ENGINE=INNODB";

        $this->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE users";
        $this->pdo->exec($SQL);
    }
}