<?php

namespace iseeyoucopy\phpmvc\controllers;

use iseeyoucopy\phpmvc\Controller;
use iseeyoucopy\phpmvc\Application;
use iseeyoucopy\phpmvc\exception\NotFoundException;
use iseeyoucopy\phpmvc\middlewares\AuthMiddleware;
use iseeyoucopy\phpmvc\Request;
use iseeyoucopy\phpmvc\Response;
class AdminProductController extends Controller
{
    public function index(Request $request, Response $response)
    {
        return $this->render('admin/products');
    }
}