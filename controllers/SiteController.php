<?php

namespace iseeyoucopy\phpmvc\controllers;


use iseeyoucopy\phpmvc\Application;
use iseeyoucopy\phpmvc\Controller;
use iseeyoucopy\phpmvc\middlewares\AuthMiddleware;
use iseeyoucopy\phpmvc\models\Cart;
use iseeyoucopy\phpmvc\models\LoginForm;
use iseeyoucopy\phpmvc\models\Product;
use iseeyoucopy\phpmvc\models\User;
use iseeyoucopy\phpmvc\Request;
use iseeyoucopy\phpmvc\Response;

/**
 * Class SiteController
 *
 * @author iseeyoucopy
 * @package app\controllers
 */
class SiteController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function home()
    {
        return $this->render('home', [
            'name' => 'IseeYoucopy MVC Framework'
        ]);
    }

    public function login(Request $request)
    {
        $loginForm = new LoginForm();
        if ($request->getMethod() === 'post') {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
                Application::$app->response->redirect('/');
                return;
            }
        }
        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $loginForm
        ]);
    }

    public function register(Request $request)
    {
        $registerModel = new User();
        if ($request->getMethod() === 'post') {
            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
                return 'Show success page';
            }

        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function profile()
    {
        return $this->render('profile');
    }
    public function info()
    {
        return $this->render('info');
    }
}
