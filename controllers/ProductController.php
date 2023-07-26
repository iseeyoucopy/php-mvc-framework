<?php

namespace app\controllers;

use app\models\Product;

use iseeyoucopy\phpmvc\Application;
use iseeyoucopy\phpmvc\Controller;
use iseeyoucopy\phpmvc\exception\NotFoundException;
use iseeyoucopy\phpmvc\middlewares\AuthMiddleware;
use iseeyoucopy\phpmvc\Request;
use iseeyoucopy\phpmvc\Response;

class ProductController extends Controller
{
    /*
    public function productView()
    {
        return $this->render('product_view');
        // render view and pass $results
    }
    */
    public function productView()
    {
        $product = new Product();
        $results = $product->findAll();

        // Now, $results contains all the product records from the database
        // You pass it to the view

        return $this->render('products', [
            'products' => $results
        ]);
    }

        public function productAdd(Request $request)
        {
            $productModel = new Product();
            if ($request->getMethod() === 'post') {
                $productModel->loadData($request->getBody());
                if ($productModel->validate() && $productModel->save()) {
                    Application::$app->session->setFlash('success', 'Product added succesfully');
                    Application::$app->response->redirect('/');
                    return 'Show success page';
                }
            }
            return $this->render('product_add', [
                'model' => $productModel
            ]);
        }
    public function productEdit(Request $request, Response $response): string
    {
        $id = $request->getRouteParams()['id'];
        $productModel = Product::findById($id); // fetch the product details from the database

        // Check if form was submitted
        if ($request->getMethod() === 'post') {
            // Load the submitted data into the model
            $productModel->loadData($request->getBody());

            // If the data is valid, update the product and redirect
            if ($productModel->validate() && $productModel->update()) {
                Application::$app->session->setFlash('success', 'Product updated successfully');
                Application::$app->response->redirect('/products');
            }
        }
        // Render the product edit form
        return $this->render('product_edit', [
            'model' => $productModel,
        ]);
    }
    public function addToBasket(Request $request)
    {
        // Start the session (or make sure it has been started)
        if(session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        // Get product ID and quantity from the request
        $productID = $request->get('product_id');
        $quantity = $request->get('quantity');

        // Get the basket from the session (or create a new one if it doesn't exist)
        if (!isset($_SESSION['basket'])) {
            $_SESSION['basket'] = new Basket();
        }

        // Add the product to the basket
        $_SESSION['basket']->addProduct($productID, $quantity);

        // Redirect to a confirmation page or back to the product list
        Application::$app->response->redirect('/basket');
    }
    public function productDelete(Request $request)
    {
        $id = $request->getRouteParams()['id'];
        $productModel = Product::findProductById($id); // fetch the product details from the database

        $product = new Product();
        $result = $product->delete($id);
        if ($result) {
            // Successful deletion. Redirect to a success page or product list
        } else {
            // Failed deletion. Redirect to an error page or show an error message
        }
    }
}
