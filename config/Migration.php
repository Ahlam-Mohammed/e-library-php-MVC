<?php

namespace App\Config;

use PDO;

class Migration extends Database
{
    public function applyMigrations()
    {
        $this->createMigrationsTable();
        $appliedMigrations = $this->getAppliedMigrations();

        $newMigrations = [];

        $files = scandir('./database/migrations');
        $toApplyMigrations = array_diff($files, $appliedMigrations);

        foreach ($toApplyMigrations as $migration)
        {
            if ($migration === '.' || $migration === '..') {
                continue;
            }

            require_once './database/migrations/' . $migration;

            $className = pathinfo($migration, PATHINFO_FILENAME);
            $instance = new $className();

            $this->log("\e[0;33mMigrating:\e[0m $migration");
            $instance->up();
            $this->log("\e[0;32mMigrated:\e[0m  $migration");
            $newMigrations[] = $migration;
        }

        if (!empty($newMigrations)) {
            $this->saveMigrations($newMigrations);
        } else {
            echo "\e[0;32mNothing to migrate.\e[0m";
        }
    }

    protected function createMigrationsTable()
    {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS migrations (
            id INT AUTO_INCREMENT PRIMARY KEY,
            migration VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )  ENGINE=INNODB;");
    }

    protected function getAppliedMigrations()
    {
        $statement = $this->pdo->prepare("SELECT migration FROM migrations");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_COLUMN);
    }

    protected function saveMigrations(array $newMigrations)
    {
        $str = implode(',', array_map(function ($m) {
            return "('$m')";
        }, $newMigrations));
        $statement = $this->pdo->prepare("INSERT INTO migrations (migration) VALUES 
            $str
        ");
        $statement->execute();
    }

    public function prepare($sql): \PDOStatement
    {
        return $this->pdo->prepare($sql);
    }

    private function log($message)
    {
        echo $message  ." - (" . date("H:i:s") . ") " . PHP_EOL ;
    }
}