<?php

use App\Config\Database;

class migrate_0008_create_order_details_table extends Database
{
    public function up()
    {
        $SQL = "CREATE TABLE IF NOT EXISTS `order_details` (
                    `id` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    `order_id` INT(2) NOT NULL,
                    `book_id` INT(2) NOT NULL,
                    `quantity` INT(2) NOT NULL,
                    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
                    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
            ) ENGINE=INNODB";

        $this->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE order_details";
        $this->pdo->exec($SQL);
    }
}