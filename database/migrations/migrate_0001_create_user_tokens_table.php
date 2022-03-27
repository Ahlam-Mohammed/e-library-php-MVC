<?php

use App\Config\Database;

class migrate_0001_create_user_tokens_table extends Database
{
    public function up()
    {
        $SQL = "CREATE TABLE IF NOT EXISTS `user_tokens` (
                    `id` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    `user_id` INT(2) NOT NULL,
                    `token` VARCHAR(255) NOT NULL,
                    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
                    `country` VARCHAR(255) DEFAULT NULL,
                    `device` VARCHAR(255) DEFAULT NULL,
                    `os` VARCHAR(255) DEFAULT NULL
                ) ENGINE=INNODB";

        $this->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE user_tokens";
        $this->pdo->exec($SQL);
    }
}