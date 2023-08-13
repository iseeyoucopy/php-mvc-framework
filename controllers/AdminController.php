<?php

namespace iseeyoucopy\phpmvc\controllers;

namespace iseeyoucopy\phpmvc\controllers;

use iseeyoucopy\phpmvc\Application;
use iseeyoucopy\phpmvc\Controller;
use iseeyoucopy\phpmvc\middlewares\AuthMiddleware;
use iseeyoucopy\phpmvc\models\Faq;
use iseeyoucopy\phpmvc\models\FaqCats;
use iseeyoucopy\phpmvc\models\Product;
use iseeyoucopy\phpmvc\models\User;
use iseeyoucopy\phpmvc\Request;
use iseeyoucopy\phpmvc\Response;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['actionIndex', 'actionProducts'], ['admin', 'moderator']));
        //$this->registerMiddleware(new AuthMiddleware(['admin', 'moderator']));
        //$this->registerMiddleware(new AuthMiddleware(['admin']));

    }

    public function actionIndex(Request $request, Response $response)
    {

        $this->setLayout('admin_template');
        return $this->render('admin/index', [
            // Additional parameters if needed
        ]);
    }

    public function actionProducts(Request $request, Response $response)
    {
        $this->setLayout('admin_template');
        $product = new Product();
        $results = $product->findAll();

        return $this->render('admin/products', [
            'products' => $results
        ]);
    }
    public function actionFaq(Request $request, Response $response)
    {
        $this->setLayout('admin_template');
        $cats = new FaqCats();
        $results = $cats->findAll();// Implement the database query to fetch FAQ categories
        $faqs = new Faq();
        $faq_res = $faqs->findAll(); // Implement the database query to fetch FAQs
        // Now, $results contains all the product records from the database
        // You pass it to the view
        return $this->render('admin/faq', [
            'cats' => $results,
            'faqs' => $faq_res,
            'lang' => [
                'faq_welcome' => 'Welcome to FAQ',
                'faq_contents_header' => 'Here are some of our most frequently asked questions.',
                // Add more language strings if needed
            ],
        ]);

    }

    public function productAdd(Request $request): string
    {
        $this->setLayout('admin_template');
        $productModel = new Product();
        if ($request->getMethod() === 'post') {
            $productModel->loadData($request->getBody());
            if ($productModel->validate() && $productModel->save()) {
                Application::$app->session->setFlash('success', 'Product added successfully');
                Application::$app->response->redirect('admin/products');
                return 'Show success page';
            }
        }
        return $this->render('/admin/product_add', [
            'model' => $productModel
        ]);
    }

    public function productEdit(Request $request, Response $response): string
    {
        $this->setLayout('admin_template');
        $id = $request->getRouteParams('')['id'];
        $productModel = Product::findById($id); // fetch the product details from the database

        // Check if form was submitted
        if ($request->getMethod() === 'post') {
            // Load the submitted data into the model
            $productModel->loadData($request->getBody());

            // If the data is valid, update the product and redirect
            if ($productModel->validate() && $productModel->update()) {
                Application::$app->session->setFlash('success', 'Product updated successfully');
                Application::$app->response->redirect('admin/products');
            }
        }
        // Render the product edit form
        return $this->renderAdmin('product_edit', [
            'model' => $productModel,
        ]);
    }

    public function faqEdit(Request $request, Response $response): string
    {
        $this->setLayout('admin_template');
        $id = $request->getRouteParams('')['id'];
        $faqModel = Faq::findById($id); // fetch the product details from the database

        // Check if form was submitted
        if ($request->getMethod() === 'post') {
            // Load the submitted data into the model
            $faqModel->loadData($request->getBody());

            // If the data is valid, update the product and redirect
            if ($faqModel->validate() && $faqModel->update()) {
                Application::$app->session->setFlash('success', 'Product updated successfully');
                Application::$app->response->redirect('/admin/faq');
            }
        }
        // Render the product edit form
        return $this->renderAdmin('faq_edit', [
            'model' => $faqModel,
        ]);
    }
    public function userList(Request $request, Response $response)
    {

        $this->setLayout('admin_template');
        return $this->render('admin/users_list', [
            // Additional parameters if needed
        ]);
    }
    public function index()
    {
        $userModel = new User();
        $totalUsers = $userModel->totalUsers("");
        $totalActiveUsers = $userModel->totalUsers('active');
        $totalPendingUsers = $userModel->totalUsers('pending');
        $totalDeletedUsers = $userModel->totalUsers('deleted');

        return $this->render('dashboard/index', [
            'totalUsers' => $totalUsers,
            'totalActiveUsers' => $totalActiveUsers,
            'totalPendingUsers' => $totalPendingUsers,
            'totalDeletedUsers' => $totalDeletedUsers,
        ]);
    }
}
