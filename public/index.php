<?php

use app\controllers\AboutController;
use app\controllers\ProductController;
use app\controllers\SiteController;
use iseeyoucopy\phpmvc\Application;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config = [
    'userClass' => \app\models\User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->on(Application::EVENT_BEFORE_REQUEST, function () {
    // echo "Before request from second installation";
});

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/register', [SiteController::class, 'register']);
$app->router->post('/register', [SiteController::class, 'register']);
$app->router->get('/login', [SiteController::class, 'login']);
$app->router->get('/login/{id}', [SiteController::class, 'login']);
$app->router->post('/login', [SiteController::class, 'login']);
$app->router->get('/logout', [SiteController::class, 'logout']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->get('/about', [AboutController::class, 'index']);
$app->router->get('/profile', [SiteController::class, 'profile']);
$app->router->get('/products', [ProductController::class, 'productView']);
$app->router->get('/product', [SiteController::class, 'product']);
$app->router->get('/product_add', [ProductController::class, 'productAdd']);
$app->router->post('/product_add', [ProductController::class, 'productAdd']);
$app->router->get('/product_edit/{id:\d+}/', [ProductController::class, 'productEdit']);
$app->router->post('/product_edit/{id:\d+}/', [ProductController::class, 'productEdit']);
$app->router->get('/profile/{id:\d+}/{username}', [SiteController::class, 'login']);
$app->router->get('/admin', 'AdminController@index');
$app->router->get('/admin/products', 'AdminProductsController@index');
// /profile/{id}
// /profile/13
// \/profile\/\w+

// /{id}
$app->run();
