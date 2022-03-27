<?php

use App\Config\Database;
use Dotenv\Dotenv;

require_once __DIR__.'/vendor/autoload.php';
$dotenv = Dotenv::createImmutable(dirname(__DIR__ . '/../'));
$dotenv->load();

//echo $_ENV['DB_DATABASE'];

$config = [
    'hostname' => $_ENV['DB_HOST'],
    'database' => $_ENV['DB_DATABASE'],
    'username' => $_ENV['DB_USERNAME'],
    'password' => $_ENV['DB_PASSWORD']
];

$DB = new Database($config);

$DB->applyMigrations();