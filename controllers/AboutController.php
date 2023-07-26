<?php

namespace app\controllers;

use iseeyoucopy\phpmvc\Controller;

/**
 * Class AboutController
 *
 * @author iseeyoucopy
 * @package app\controllers
 */
class AboutController extends Controller
{
    public function index()
    {
        return $this->render('about');
    }
}