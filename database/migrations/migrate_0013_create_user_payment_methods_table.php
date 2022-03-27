<?php

use App\Config\Database;

class migrate_0013_create_user_payment_methods_table extends Database
{
    public function up()
    {
        $SQL = "CREATE TABLE IF NOT EXISTS `user_payment_methods` (
                    `id` INT(2) NOT NULL,
                    `user_id` INT(2) NOT NULL,
                    `payment_id` INT(2) NOT NULL,
                    `is_active` TINYINT(4) NOT NULL,
                    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
                    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP()
                ) ENGINE=INNODB";

        $this->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE user_payment_methods";
        $this->pdo->exec($SQL);
    }
}