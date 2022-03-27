<?php

use App\Config\Database;

class migrate_0007_create_orders_table extends Database
{
    public function up()
    {
        $SQL = "CREATE TABLE IF NOT EXISTS `orders` (
                    `id` INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    `user_id` INT(2) NOT NULL,
                    `status` INT(2) NOT NULL,
                    `total` DOUBLE NOT NULL,
                    `discount` DOUBLE NOT NULL,
                    `net_total` DOUBLE NOT NULL,
                    `payment_method` INT(2) DEFAULT NULL,
                    `address_id` INT(2) NOT NULL,
                    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
                    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
            ) ENGINE=INNODB";

        $this->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE orders";
        $this->pdo->exec($SQL);
    }
}