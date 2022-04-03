<?php

use App\Config\Database;

class migrate_0010_create_publishers_table extends Database
{
    public function up()
    {
        $SQL = "CREATE TABLE IF NOT EXISTS `publishers` (
                    `id` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    `name` VARCHAR(255) NOT NULL,
                    `phone` VARCHAR(255) NOT NULL,
                    `alt_phone` VARCHAR(255) DEFAULT NULL,
                    `fax` VARCHAR(255) DEFAULT NULL,
                    `email` VARCHAR(255) DEFAULT NULL,
                    `address` VARCHAR(255) DEFAULT NULL,
                    `country` VARCHAR(255) NOT NULL,
                    `image` VARCHAR(255) DEFAULT NULL,
                    `is_active` TINYINT(1) NOT NULL DEFAULT 1,
                    `is_deleted` TINYINT(1) NOT NULL DEFAULT 0,
                    `created_by` INT(2) NOT NULL,
                    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
                    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
                ) ENGINE=INNODB";

        $this->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE publishers";
        $this->pdo->exec($SQL);
    }
}