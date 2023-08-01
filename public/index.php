<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Dotenv\Dotenv;
use iseeyoucopy\phpmvc\Application;
use iseeyoucopy\phpmvc\controllers\AboutController;
use iseeyoucopy\phpmvc\controllers\AdminController;
use iseeyoucopy\phpmvc\controllers\CartController;
use iseeyoucopy\phpmvc\controllers\ProductController;
use iseeyoucopy\phpmvc\controllers\SiteController;
use iseeyoucopy\phpmvc\models\User;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config = [
    'userClass' => User::class,
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

$app->router->get('/product/{id:\d+}/', [ProductController::class, 'productDetails']);

$app->router->get('/product_add', [ProductController::class, 'productAdd']);
$app->router->post('/product_add', [ProductController::class, 'productAdd']);

$app->router->get('/addToCart', [ProductController::class, 'addToCart']);
$app->router->get('/info', [SiteController::class, 'info']);

$app->router->get('/product_edit/{id:\d+}/', [ProductController::class, 'productEdit']);
$app->router->post('/product_edit/{id:\d+}/', [ProductController::class, 'productEdit']);

$app->router->get('/profile/{id:\d+}/{username}', [SiteController::class, 'login']);

$app->router->get('/cart', [ProductController::class, 'viewCart']);
$app->router->post('/removeFromCart', [ProductController::class, 'removeFromCart']);

// Assuming you are using a router class to handle routes, define the route for the admin page:
$app->router->get('/admin', [AdminController::class, 'actionIndex']);
// /profile/{id}
// /profile/13
// \/profile\/\w+

// /{id}
$app->run();
