<?php

use App\Config\Migration;
use Dotenv\Dotenv;

require_once __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__ . '/../'));
$dotenv->load();

$migrate = new Migration();
$migrate->applyMigrations();