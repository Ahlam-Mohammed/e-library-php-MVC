<?php

use App\Seeder\AuthorSeeder;
use App\Seeder\BookSeeder;
use App\Seeder\CategorySeeder;
use App\Seeder\PaymentSeeder;
use App\Seeder\PublisherSeeder;
use App\Seeder\RoleSeeder;
use App\Seeder\UserSeeder;
use Dotenv\Dotenv;

require_once __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__ . '/../'));
$dotenv->load();

$role = new RoleSeeder();
$role->insert();

$user = new UserSeeder();
$user->insert();

$category = new CategorySeeder();
$category->insert();

$author = new AuthorSeeder();
$author->insert();

$publisher = new PublisherSeeder();
$publisher->insert();

$pay = new PaymentSeeder();
$pay->insert();

$book = new BookSeeder();
$book->insert();