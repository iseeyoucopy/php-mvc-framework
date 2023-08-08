<?php

namespace iseeyoucopy\phpmvc\models;

use iseeyoucopy\phpmvc\db\DbModel;

class Faq extends DbModel
{
    public int $id = 0;
    public int $type = 0;
    public string $title = '';
    public string $text = '';

    public static function tableName(): string
    {
        return 'faq';
    }

    public function attributes(): array
    {
        return [
            'type',
            'title',
            'text'
        ];
    }
    public function rules(): array {
        return [
            'type' => [self::RULE_REQUIRED],
            'title' => [self::RULE_REQUIRED],
            'text' => [self::RULE_REQUIRED]
        ];
    }

    public function labels(): array {
        return [
            'type' => 'Type',
            'title' => 'Title',
            'text' => 'Text'
        ];
    }
}