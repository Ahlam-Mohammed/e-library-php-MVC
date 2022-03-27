<?php

use App\Config\Database;

class migrate_0012_create_user_addresses_table extends Database
{
    public function up()
    {
        $SQL = "CREATE TABLE IF NOT EXISTS `user_addresses` (
                    `id` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    `user_id` INT(2) NOT NULL,
                    `city_id` INT(2) NOT NULL,
                    `address` VARCHAR(255) NOT NULL,
                    `phone` VARCHAR(255) NOT NULL,
                    `is_active` TINYINT(1) NOT NULL,
                    `lat` DOUBLE DEFAULT NULL,
                    `lng` DOUBLE DEFAULT NULL,
                    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
                    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP()
                ) ENGINE=INNODB";

        $this->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE user_addresses";
        $this->pdo->exec($SQL);
    }
}