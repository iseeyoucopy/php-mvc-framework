<?php

namespace iseeyoucopy\phpmvc\models;

use iseeyoucopy\phpmvc\Application;
use iseeyoucopy\phpmvc\Model;

/**
 * Class LoginForm
 *
 * @package iseeyoucopy\phpmvc\models
 */
class LoginForm extends Model
{
    public string $email = '';
    public string $password = '';
    public string $roles = '';

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED],
        ];
    }

    public function labels(): array
    {
        return [
            'email' => 'Your Email address',
            'password' => 'Password'
        ];
    }

    public function login()
    {
        $user = User::findOne(['email' => $this->email]);

        if (!$user) {
            $this->addError('email', 'User does not exist with this email address');
            return false;
        }
        if (!password_verify($this->password, $user->password)) {
            $this->addError('password', 'Password is incorrect');
            return false;
        }

        // Save user data to the database
        $user->update();

        return Application::$app->login($user);
    }
}
