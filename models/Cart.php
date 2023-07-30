<?php
// Cart.php

namespace iseeyoucopy\phpmvc\models;

use iseeyoucopy\phpmvc\db\DbModel;

class Cart extends DbModel
{
    public int $id = 0;
    public int $user_id = 0;
    public string $status = '';
    public string $guest_id = '';
    public int $product_id = 0;
    public int $quantity = 0;
    public string $created_at = '';

    public static function tableName(): string
    {
        return 'cart';
    }

    public function attributes(): array
    {
        return ['user_id', 'created_at'];
    }
}
