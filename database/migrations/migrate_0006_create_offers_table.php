<?php

use App\Config\Database;

class migrate_0006_create_offers_table extends Database
{
    public function up()
    {
        $SQL = "CREATE TABLE IF NOT EXISTS `offers` (
                    `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    `title` VARCHAR(255) NOT NULL,
                    `discount` DOUBLE NOT NULL,
                    `start_date` DATE DEFAULT NULL,
                    `end_date` DATE DEFAULT NULL,
                    `book_ids` VARCHAR(255) DEFAULT NULL,
                    `category_ids` VARCHAR(255) DEFAULT NULL,
                    `all_books` TINYINT(1) DEFAULT NULL,
                    `is_active` TINYINT(1) NOT NULL,
                    `created_by` INT(2) NOT NULL,
                    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
                    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
            ) ENGINE=INNODB";

        $this->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE offers";
        $this->pdo->exec($SQL);
    }
}