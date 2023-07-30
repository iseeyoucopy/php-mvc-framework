<?php

namespace iseeyoucopy\phpmvc\controllers;

use iseeyoucopy\phpmvc\Application;
use iseeyoucopy\phpmvc\Controller;
use iseeyoucopy\phpmvc\middlewares\AuthMiddleware;
use iseeyoucopy\phpmvc\models\Cart;
use iseeyoucopy\phpmvc\models\Product;
use iseeyoucopy\phpmvc\Request;
use iseeyoucopy\phpmvc\Response;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['products']));
    }
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

    public function productAdd(Request $request): string
    {
        $productModel = new Product();
        if ($request->getMethod() === 'post') {
            $productModel->loadData($request->getBody());
            if ($productModel->validate() && $productModel->save()) {
                Application::$app->session->setFlash('success', 'Product added successfully');
                Application::$app->response->redirect('/products');
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

    public function viewCart()
    {
        $productsInCart = new Cart();
        $results = $productsInCart->findAll();
        return $this->render('view_cart', [
            'products' => $productsInCart
        ]);
    }

    public function removeFromCart(Request $request)
    {
        $product_id = $request->getRouteParams('product_id');

        // Remove the product from the user's cart
        Application::$app->user->removeFromCart($product_id);

        // Redirect back to the cart page
        Application::$app->response->redirect('/cart');
    }

    public function addToCart(Request $request, Response $response)
    {
        // Get the product ID from the request
        $product_id = $request->getRouteParam('id');
        var_dump($product_id);
        // Check if the product exists (you'll need to fetch the product from the database)
        $product = Product::findOne(['id' => $product_id]);
        if ($request->getMethod() === 'post') {
            // Load the submitted data into the model
            $product->loadData($request->getBody());

            // If the data is valid, update the product and redirect
            if ($product->validate() && $product->update()) {
                Application::$app->session->setFlash('success', 'Product added to cart');
                Application::$app->response->redirect('/product?id=' . $product_id);
            }
        }
        // Render the product edit form
        return $this->render('product_edit', [
            'model' => $product,
        ]);
    }

    public function cart(): string
    {
        // ... Your existing cart action code ...

        // Render the cart view
        return $this->render('cart', [
            'products' => $products,
        ]);
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
