<?php

use App\Config\Database;

class migrate_0009_create_payments_table extends Database
{
    public function up()
    {
        $SQL = "CREATE TABLE IF NOT EXISTS `payments` (
                    `id` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    `name` VARCHAR(255) NOT NULL,
                    `image` VARCHAR(255) NOT NULL,
                    `is_active` TINYINT(1) NOT NULL DEFAULT 1,
                    `created_by` INT(2) DEFAULT NULL,
                    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
                    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
                ) ENGINE=INNODB";

        $this->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE payments";
        $this->pdo->exec($SQL);
    }
}