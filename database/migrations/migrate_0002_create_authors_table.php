<?php

use App\Config\Database;

class migrate_0002_create_authors_table extends Database
{
    public function up()
    {
        $SQL = "CREATE TABLE IF NOT EXISTS `authors` (
                    `id` INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    `name` VARCHAR(255) NOT NULL,
                    `phone` VARCHAR(255) DEFAULT NULL,
                    `email` VARCHAR(255) DEFAULT NULL,
                    `bio` TEXT DEFAULT NULL,
                    `is_active` TINYINT(1) NOT NULL,
                    `created_by` INT(5) NOT NULL,
                    `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
                    `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP()
                ) ENGINE=INNODB";

        $this->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE authors";
        $this->pdo->exec($SQL);
    }
}