<?php

use App\Config\Database;

class migrate_0009_create_payements_table extends Database
{
    public function up()
    {
        $SQL = "CREATE TABLE IF NOT EXISTS `payements` (
                    `id` INT(2) NOT NULL,
                    `name` VARCHAR(255) NOT NULL,
                    `image` VARCHAR(255) NOT NULL,
                    `is_active` TINYINT(1) NOT NULL,
                    `created_by` INT(2) NOT NULL,
                    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
                    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
                ) ENGINE=INNODB";

        $this->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE payements";
        $this->pdo->exec($SQL);
    }
}