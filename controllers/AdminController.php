<?php

namespace iseeyoucopy\phpmvc\controllers;

namespace iseeyoucopy\phpmvc\controllers;

use iseeyoucopy\phpmvc\Request;
use iseeyoucopy\phpmvc\Response;

class AdminController extends Controller
{
    public function index(Request $request, Response $response)
    {
        return $this->render('admin/index');
    }
}
