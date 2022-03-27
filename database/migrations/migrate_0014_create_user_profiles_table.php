<?php

use App\Config\Database;

class migrate_0014_create_user_profiles_table extends Database
{
    public function up()
    {
        $SQL = "CREATE TABLE IF NOT EXISTS `user_profiles` (
                    `id` INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    `image` VARCHAR(255) NOT NULL,
                    `phone` VARCHAR(255) NOT NULL,
                    `address` VARCHAR(255) NOT NULL,
                    `user_id` INT(5) NOT NULL UNIQUE ,
                    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
                    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP()
                ) ENGINE=INNODB";

        $this->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE user_profiles";
        $this->pdo->exec($SQL);
    }
}