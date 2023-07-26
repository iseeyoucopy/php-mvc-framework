<?php

namespace iseeyoucopy\phpmvc\controllers;

use iseeyoucopy\phpmvc\Controller;

/**
 * Class AboutController
 *
 * @author iseeyoucopy
 * @package iseeyoucopy\phpmvc\controllers
 */
class AboutController extends Controller
{
    public function index()
    {
        return $this->render('about');
    }
}