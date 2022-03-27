<?php

namespace App\Config;

use PDO;

class Database
{
    public $pdo;

    public function __construct()
    {
        $hostname = $_ENV['DB_HOST'];
        $database = $_ENV['DB_DATABASE'];
        $username = $_ENV['DB_USERNAME'];
        $password = $_ENV['DB_PASSWORD'];

        $dbDsn = "mysql:host=$hostname;dbname=$database";

        $this->pdo = new PDO($dbDsn, $username, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}