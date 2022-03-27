<?php

use App\Config\Database;

class migrate_0003_create_books_table extends Database
{
    public function up()
    {
        $SQL = "CREATE TABLE IF NOT EXISTS `books` (
                    `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    `title` VARCHAR(255) NOT NULL,
                    `image` VARCHAR(255) NOT NULL,
                    `price` DOUBLE NOT NULL,
                    `description` TEXT NOT NULL,
                    `pages_number` INT(2) NOT NULL,
                    `category_id` INT(3) NOT NULL,
                    `author_id` INT(3) NOT NULL,
                    `publisher_id` INT(3) NOT NULL,
                    `quantity` INT(2) NOT NULL,
                    `format` VARCHAR(255) NOT NULL,
                    `created_by` INT(3) NOT NULL,
                    `is_active` TINYINT(1) NOT NULL,
                    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
                    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
                ) ENGINE=INNODB";

        $this->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE books";
        $this->pdo->exec($SQL);
    }
}