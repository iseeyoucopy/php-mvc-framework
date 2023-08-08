<?php

namespace iseeyoucopy\phpmvc\controllers;

namespace iseeyoucopy\phpmvc\controllers;

use iseeyoucopy\phpmvc\Application;
use iseeyoucopy\phpmvc\Controller;
use iseeyoucopy\phpmvc\middlewares\AuthMiddleware;
use iseeyoucopy\phpmvc\models\Faq;
use iseeyoucopy\phpmvc\models\Product;
use iseeyoucopy\phpmvc\Request;
use iseeyoucopy\phpmvc\Response;

class AdminController extends Controller
{
    public function __construct()
    {
        // Apply the AuthMiddleware to all actions within this controller
        $this->registerMiddleware(new AuthMiddleware(['admin']));

    }

    public function actionIndex(Request $request, Response $response)
    {
        // Check if the user has the 'admin' role
        if (Application::$app->user && Application::$app->user->role === 'admin') {
            // Render admin view
            $this->setLayout('admin');
            return $this->render('admin_page');
        } else {
            // Redirect or show an error message
            // For example, redirect to the home page
            Application::$app->response->redirect('/');
        }

        $this->setLayout('admin_template');
        return $this->render('admin/index', [
            // Additional parameters if needed
        ]);
    }

    public function actionProducts(Request $request, Response $response)
    {
        $product = new Product();
        $results = $product->findAll();

        return $this->render('admin/products', [
            'products' => $results
        ]);
    }

    public function productAdd(Request $request): string
    {
        $productModel = new Product();
        if ($request->getMethod() === 'post') {
            $productModel->loadData($request->getBody());
            if ($productModel->validate() && $productModel->save()) {
                Application::$app->session->setFlash('success', 'Product added successfully');
                Application::$app->response->redirect('admin/products');
                return 'Show success page';
            }
        }
        return $this->render('product_add', [
            'model' => $productModel
        ]);
    }

    public function productEdit(Request $request, Response $response): string
    {
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
}
