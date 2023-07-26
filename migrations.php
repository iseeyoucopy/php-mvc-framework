<?php

use Dotenv\Dotenv;
use iseeyoucopy\phpmvc\models\User;
use iseeyoucopy\phpmvc\Application;

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    'userClass' => User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(__DIR__, $config);

$app->db->applyMigrations();