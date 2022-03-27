<?php

use App\Config\Database;

class migrate_0011_create_roles_table extends Database
{
    public function up()
    {
        $SQL = "CREATE TABLE IF NOT EXISTS `roles` (
                    `id` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    `name` VARCHAR(255) NOT NULL,
                    `is_active` TINYINT(1) NOT NULL,
                    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
                    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
            ) ENGINE=INNODB";

        $this->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE roles";
        $this->pdo->exec($SQL);
    }
}