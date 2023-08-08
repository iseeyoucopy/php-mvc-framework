<?php

namespace iseeyoucopy\phpmvc\models;

use iseeyoucopy\phpmvc\db\DbModel;

class FaqCats extends DbModel
{
    public int $id = 0;
    public string $name = '';
    public string $shortcut = '';
    public int $min_view = 0;

    public static function tableName(): string
    {
        return 'faq_cat';
    }

    public function attributes(): array
    {
        return [
            'type',
            'name',
            'shortcut',
            'min_view'
        ];
    }
}