<?php

namespace iseeyoucopy\phpmvc\models;

use iseeyoucopy\phpmvc\Application;
use iseeyoucopy\phpmvc\db\DbModel;
use iseeyoucopy\phpmvc\Model;
use PHPMailer\PHPMailer\PHPMailer;

class ContactForm extends DbModel
{
    public string $name = '';
    public string $email = '';
    public string $subject = '';
    public string $message = '';
    public string $submission_date = '';
    public static function tableName(): string
    {
        return 'contact_submissions';
    }

    public function attributes(): array
    {
        return [
            'name',
            'email',
            'subject',
            'message',
            'submission_date'
        ];
    }

    public function rules(): array
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'subject' => [self::RULE_REQUIRED],
            'message' => [self::RULE_REQUIRED],
        ];
    }

    public function save()
    {
        //$user = User::findOne(['username' => $this->added_by]);
        $this->submission_date = date('Y-m-d H:i:s');
        // Check if user exists, else use a default username
        //$this->added_by = $user->username ?? 'Anonymous';
        //var_dump($user);


        return parent::save();

        //return $mail->send();
    }
}
