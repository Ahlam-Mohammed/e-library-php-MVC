<?php

namespace App\Config;

use PDO;
use PDOException;

class Database
{
    public $pdo;

    public function __construct($dbConfig = [])
    {
//        $hostname = $dbConfig['hostname'] ?? '';
//        $database = $dbConfig['database'] ?? '';
//        $username = $dbConfig['username'] ?? '';
//        $password = $dbConfig['password'] ?? '';
//
//        $dbDsn = "mysql:host=$hostname;dbname=$database";

        $dbDsn = "mysql:host=localhost;dbname=e-library";
        $username = "root";
        $password = "";


        $this->pdo = new PDO($dbDsn, $username, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

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

//    const HOSTNAME = 'localhost';
//    const USERNAME = 'root';
//    const PASSWORD = '';
//    const DATABASE = 'harmash';
//
//    public $conn;
//
//    private $table_name;
//    private $columns    = [];
//    private $values     = [];
//
//    private $condition;
//    private $limit;
//    private $orderBy;
//    private $groupBy;
//
//    private $join;
//    private $rightJoin;
//    private $leftJoin;
//
//    private $duplicate;
//    private $columnCount;
//
//    public $result;
//
//    public function __construct()
//    {
//        try
//        {
//            $this->conn = new PDO("mysql:host=".self::HOSTNAME.";dbname=".self::DATABASE."", self::USERNAME, self::PASSWORD);
//        }
//        catch(PDOException $e) {
//            echo "ERROR: " . $e->getMessage();
//        }
//    }
//
//    public function creatDatabase($nameDatabase)
//    {
//        $sql = "CREATE DATABASE IF NOT EXISTS $nameDatabase";
//        $this->conn->prepare($sql)->execute();
//    }
//
//    public function get()
//    {
//        $this->initializStm();
//
//        $sql = "SELECT ". $this-> columns .
//            " FROM ". $this-> table_name
//            . $this-> join
//            . $this-> leftJoin
//            . $this-> rightJoin
//            . $this-> condition
//            . $this-> groupBy
//            . $this-> orderBy
//            . $this-> limit;
//
//        $stm = $this->conn->prepare($sql);
//        echo $sql;
//        if ($stm->execute())
//        {
//            $this->result = $stm->fetchAll();
//            $this->resetInput();
//        }
//        else
//        {
//            $this->result = "error";
//            $this->resetInput();
//        }
//    }
//
//    public function update()
//    {
//
//        $this->initializStm();
//
//        $sql = "UPDATE ". $this->table_name
//            . " SET "
//            . $this->values
//            . $this-> condition;
//
//        $this->conn->prepare($sql)->execute();
//
//        $this->resetInput();
//    }
//
//    public function create($data = array())
//    {
//        $table_columns = implode(',', array_keys($data));
//        $table_values  = implode("','", $data);
//
//        $sql = "INSERT INTO $this->table_name ($table_columns) VALUES ('$table_values')";
//
//        $this->conn->prepare($sql)->execute();
//    }
//
//    public function count(string $column = null , bool $duplicate = true)
//    {
//        $this->columnCount = $column;
//        $this->duplicate   = $duplicate;
//
//        $this->initializStm();
//
//        $sql = "SELECT COUNT (". $column ." )".
//            " FROM ". $this->table_name
//            . $this->condition
//            . $this->orderBy;
//
//        $stm = $this->conn->prepare($sql);
//        if ($stm->execute())
//        {
//            $this->result = $stm->fetchAll();
//        }
//
//        $this->resetInput();
//    }
//
//    public function table(string $table_name):DataBase
//    {
//        $this->table_name = $table_name;
//        return $this;
//    }
//
//    public function select(string ...$column_name):DataBase
//    {
//        $this->columns = $column_name;
//        return $this;
//    }
//
//    public function orderBy(string $order, string ...$column_name):DataBase
//    {
//        $this->orderBy = implode(',', $column_name) . " $order";
//        return $this;
//    }
//
//    public function groupBy(string ...$column_name):DataBase
//    {
//        $this->groupBy = implode(',', $column_name);
//        return $this;
//    }
//
//    public function where(string $column_name, string $opreation, $value):DataBase
//    {
//        $condition = $column_name . " " . $opreation . "  '$value'";
//
//        $this->condition === null ?
//            $this->condition = $condition :
//            $this->condition .= ' AND ' . $condition;
//
//        return $this;
//    }
//
//    public function orWhere(string $column, string $opreation, $value):DataBase
//    {
//        $condition = $column . " " . $opreation . "  '$value'";
//        $this->condition = $this->condition . ' OR ' . $condition;
//
//        return $this;
//    }
//
//    public function value(...$values):DataBase
//    {
//        $this->values []= $values;
//        return $this;
//    }
//
//    public function limit($number, $to = null):DataBase
//    {
//        $toRecord = $to === null ? '' : ",$to";
//        $this->limit = "$number".$toRecord;
//
//        return $this;
//    }
//
//    public function leftJoin(string $table_name, $FK, $PK):DataBase
//    {
//        $this->leftJoin = " LEFT JOIN  $table_name  ON  $FK  =  $PK";
//        return $this;
//    }
//
//    public function rightJoin(string $table_name, $FK, $PK):DataBase
//    {
//        $this->rightJoin = " RIGHT JOIN  $table_name  ON  $FK  =  $PK";
//        return $this;
//    }
//
//    public function join(string $table_name, $FK, $PK):DataBase
//    {
//        $this->join = " JOIN  $table_name  ON  $FK  =  $PK";
//        return $this;
//    }
//
//    private function initializStm()
//    {
//        $this->table_name = $this->table_name === null ? ''  : $this->table_name;
//
//        $this->columns    = $this->columns    === [] ? '*' : implode(', ', $this->columns);
//        $this->values     = $this->values     === [] ? ''  : implode(', ', $this->values);
//
//        $this->join      = $this->join      === null ? '' : $this->join;
//        $this->rightJoin = $this->rightJoin === null ? '' : $this->rightJoin;
//        $this->leftJoin  = $this->leftJoin  === null ? '' : $this->leftJoin;
//
//        $this->condition = $this->condition === null ? ''  : " WHERE $this->condition ";
//        $this->orderBy   = $this->orderBy   === null ? ''  : " ORDER BY $this->orderBy ";
//        $this->limit     = $this->limit     === null ? ''  : " LIMIT $this->limit ";
//        $this->groupBy   = $this->groupBy   === null ? ''  : " GROUP BY $this->groupBy ";
//
//        $this->duplicate   = $this->duplicate   === true ? '' : 'DISTINCT';
//        $this->columnCount = $this->columnCount === null ? " id " : "$this->duplicate  $this->columnCount";
//    }
//
//    private function resetInput()
//    {
//        $this->table_name = null;
//        $this->columns    = [];
//        $this->values     = [];
//
//        $this->join      = null;
//        $this->rightJoin = null;
//        $this->leftJoin  = null;
//
//        $this->condition   = null;
//        $this->order       = null;
//        $this->orderColumn = null;
//        $this->limit       = null;
//
//        $this->columnCount = null;
//        $this->duplicate   = null;
//
//        // $this->result = [];
//    }
}